@extends('layouts.app')
@section('content')
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            @include('profile.partials.update-profile-information-form')
            <hr>
            @include('profile.partials.update-password-form')
            <hr>
            @include('profile.partials.delete-user-form')
          </div>
        </div>
      </div>
    </div>
@endsection
