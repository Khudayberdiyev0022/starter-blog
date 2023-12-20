@extends('layouts.app')
@section('content')
@push('css')
  <style>
    .col .form-group:last-child {
      margin-bottom: 0 !important;
    }
  </style>
@endpush
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4><i class="fas fa-sitemap"></i> Settings</h4>
        </div>
        <div class="card-body">
          <form action="{{ route('admin.settings.store') }}" method="POST">
            @csrf
            @if(count(config('setting_fields', [])))
            @foreach(config('setting_fields') as $section => $fields)
              <div class="card-accent mb-4 border" style="border-radius: 6px">
                <div class="card-header" style="background: #f6f6f6">
                  <i class="{{ Arr::get($fields, 'icon', 'glyphicon glyphicon-flash') }} mr-2"></i>
                  {{ $fields['title'] }}
                </div>
                <div class="card-body">
                  <p class="text-muted">{{ $fields['desc'] }}</p>
                  <div class="row">
                    <div class="col">
                      @foreach($fields['elements'] as $field)
                        @includeIf('admin.settings.fields.' . $field['type'] )
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            @endif

            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
