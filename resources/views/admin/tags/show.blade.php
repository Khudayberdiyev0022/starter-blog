@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Tag Show</h4>
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
                <td>{{ $tag->id }}</td>
              </tr>
              <tr>
                <th>Title</th>
                <td>{{ $tag->title }}</td>
              </tr>
              <tr>
                <th>Slug</th>
                <td>{{ $tag->slug }}</td>
              </tr>
              <tr>
                <th>Description</th>
                <td>{{ $tag->description }}</td>
              </tr>
              <tr>
                <th>Meta Title</th>
                <td>{{ $tag->meta_title }}</td>
              </tr>
              <tr>
                <th>Meta Description</th>
                <td>{{ $tag->meta_description }}</td>
              </tr>
              <tr>
                <th>Meta Keyword</th>
                <td>{{ $tag->meta_keyword }}</td>
              </tr>
              <tr>
                <th>Order</th>
                <td>{{ $tag->order }}</td>
              </tr>
              <tr>
                <th>Status</th>
                <td>{{ $tag->status }}</td>
              </tr>
              <tr>
                <th>Created At</th>
                <td>{{ $tag->created_at }}</td>
              </tr>
              <tr>
                <th>Updated At</th>
                <td>{{ $tag->updated_at }}</td>
              </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer bg-light text-right">
           Updated at {{ $tag->updated_at->diffForHumans() }} | Created at {{ $tag->created_at->format('l, F d, Y / H:i:s') }}
          </div>
        </div>
    </div>
  </div>
@endsection
