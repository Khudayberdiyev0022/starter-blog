@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Category Show</h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
              <tr>
                <th>Key</th>
                <th>Value</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <th>ID</th>
                <td>{{ $category->id }}</td>
              </tr>
              <tr>
                <th>Title</th>
                <td>{{ $category->title }}</td>
              </tr>
              <tr>
                <th>Slug</th>
                <td>{{ $category->slug }}</td>
              </tr>
              <tr>
                <th>Description</th>
                <td>{{ $category->description }}</td>
              </tr>
              <tr>
                <th>Image</th>
                <td>
                  <img src="{{ $category->image }}" alt="{{ $category->title }}">
                </td>
              </tr>
              <tr>
                <th>Meta Title</th>
                <td>{{ $category->meta_title }}</td>
              </tr>
              <tr>
                <th>Meta Description</th>
                <td>{{ $category->meta_description }}</td>
              </tr>
              <tr>
                <th>Meta Keyword</th>
                <td>{{ $category->meta_keyword }}</td>
              </tr>
              <tr>
                <th>Order</th>
                <td>{{ $category->order }}</td>
              </tr>
              <tr>
                <th>Status</th>
                <td>{{ $category->status }}</td>
              </tr>
              <tr>
                <th>Created At</th>
                <td>{{ $category->created_at }}</td>
              </tr>
              <tr>
                <th>Updated At</th>
                <td>{{ $category->updated_at }}</td>
              </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer bg-light text-right">
           Updated at {{ $category->updated_at->diffForHumans() }} | Created at {{ $category->created_at->format('l, F d, Y / H:i:s') }}
          </div>
        </div>
    </div>
  </div>
@endsection
