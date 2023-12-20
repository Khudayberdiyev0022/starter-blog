@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Post Show</h4>
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
                <td>{{ $post->id }}</td>
              </tr>
              <tr>
                <th>Title</th>
                <td>{{ $post->title }}</td>
              </tr>
              <tr>
                <th>Slug</th>
                <td>{{ $post->slug }}</td>
              </tr>
              <tr>
                <th>Description</th>
                <td>{!! $post->description !!}</td>
              </tr>
              <tr>
                <th>Image</th>
                <td>
                  <img src="{{ $post->image }}" alt="{{ $post->title }}">
                </td>
              </tr>
              <tr>
                <th>Meta Title</th>
                <td>{{ $post->meta_title }}</td>
              </tr>
              <tr>
                <th>Meta Description</th>
                <td>{{ $post->meta_description }}</td>
              </tr>
              <tr>
                <th>Meta Keyword</th>
                <td>{{ $post->meta_keyword }}</td>
              </tr>
              <tr>
                <th>Order</th>
                <td>{{ $post->order }}</td>
              </tr>
              <tr>
                <th>Status</th>
                <td>{{ $post->status }}</td>
              </tr>
              <tr>
                <th>Created At</th>
                <td>{{ $post->created_at }}</td>
              </tr>
              <tr>
                <th>Updated At</th>
                <td>{{ $post->updated_at }}</td>
              </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer bg-light text-right">
           Updated at {{ $post->updated_at->diffForHumans() }} | Created at {{ $post->created_at->format('l, F d, Y / H:i:s') }}
          </div>
        </div>
    </div>
  </div>
@endsection
