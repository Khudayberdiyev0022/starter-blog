@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between align-items-center w-100">
            <h4><i class="fas fa-sitemap"></i>Role Create</h4>
            <div>
              <a href="{{ route('admin.roles.index') }}" class="btn btn-light"><i class="fas fa-list"></i> Lists</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('admin.roles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label class="required" for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
                  @error('name')
                  <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                @foreach($permissions as $permission)
                  <label for="{{ $permission->id }}" class="btn btn-light">
                    <input type="checkbox" name="permissions[]" id="{{ $permission->id }}" value="{{ $permission->id }}" style="vertical-align: middle">
                    {{ $permission->name }}
                  </label>
                @endforeach
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

