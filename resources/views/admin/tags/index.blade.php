@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         <div class="d-flex justify-content-between align-items-center w-100">
           <h4><i class="fas fa-sitemap"></i> Tags</h4>
           <div>
             <a href="{{ route('admin.tags.create') }}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Create</a>
             <a href="{{ route('admin.tags.index') }}" class="btn btn-dark"><i class="fas fa-eye-slash"></i> View trash</a>
           </div>
         </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered datatable">
              <thead>
              <tr>
                <th width="50">#</th>
                <th>Title</th>
                <th>Created At</th>
                <th class="dt-right">Actions</th>
              </tr>
              </thead>
              <tbody>
              @foreach($tags as $tag)
              <tr>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->title }}</td>
                <td>{{ $tag->created_at }}</td>
                <td class="dt-right">
                  <a href="{{ route('admin.tags.show', $tag->id) }}" class="btn btn-light"><i class="fas fa-eye"></i></a>
                  <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-primary ml-2"><i class="fas fa-pencil-alt"></i></a>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
