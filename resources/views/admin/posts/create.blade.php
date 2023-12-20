@extends('layouts.app')
@push('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
@endpush
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between align-items-center w-100">
            <h4><i class="fas fa-sitemap"></i>Post Create</h4>
            <div>
              <a href="{{ route('admin.posts.index') }}" class="btn btn-light"><i class="fas fa-list"></i> Lists</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-8">
                <div class="form-group">
                  <label class="required" for="title">Title</label>
                  <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
                  @error('title')
                  <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="slug" class="required">Slug <i class="text-gray-700">(Unique alias with autocomplete in title)</i></label>
                  <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror">
                  @error('slug')
                  <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="summernote-editor" name="description" cols="500" class="form-control @error('description') is-invalid @enderror">{!! old('description') !!}</textarea>
                  @error('description')
                  <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="row">
                  <div class="col-5">
                    <div class="form-group">
                      <label for="status" class="required">Status</label>
                      <select name="status" id="status" class="form-control custom-select @error('status') is-invalid @enderror">
                        <option value="">Выберите статус</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                        <option value="3">Draft</option>
                      </select>
                      @error('status')
                      <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-5">
                    <div class="form-group">
                      <label for="image">Image</label>
                      <input type="file" name="image" id="image" class="form-control">
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="form-group">
                      <label for="order">Order</label>
                      <input type="number" name="order" class="form-control @error('order') is-invalid @enderror">
                      @error('order')
                      <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-4">
                <div class="form-group">
                  <label for="meta_title">Meta title</label>
                  <input type="text" name="meta_title" id="meta_title" class="form-control">
                </div>
                <div class="form-group">
                  <label for="meta_description">Meta Description</label>
                  <input type="text" name="meta_description" id="meta_description" class="form-control">
                </div>
                <div class="form-group">
                  <label for="meta_keyword">Meta keyword</label>
                  <input type="text" name="meta_keyword" id="meta_keyword" class="form-control">
                </div>
              </div>
            </div>
            <div class="float-right">
              <button type="submit" class="btn btn-icon icon-left btn-primary"><i class="fas fa-save"></i> Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection


