@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
         <div class="d-flex justify-content-between align-items-center w-100">
           <h4><i class="fas fa-sitemap"></i> Posts</h4>
           <div>
             <a href="{{ route('admin.posts.create') }}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Create</a>
             <a href="{{ route('admin.posts.index') }}" class="btn btn-dark"><i class="fas fa-eye-slash"></i> View trash</a>
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
              @foreach($posts as $post)
              <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at }}</td>
                <td class="dt-right">
                  <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-light"><i class="fas fa-eye"></i></a>
                  <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary ml-2"><i class="fas fa-pencil-alt"></i></a>
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
