@php
$required = (Str::contains($field['rules'], 'required')) ? "required" : "";
@endphp

<div class="form-group {{ $errors->has($field['name']) ? ' has-error' : '' }}">
    <label for="{{ $field['name'] }}" class='form-label required'> <strong>{{ __($field['label']) }}</strong> ({{ $field['name'] }})</label>
    <textarea type="{{ $field['type'] }}" name="{{ $field['name'] }}" class="form-control {{ Arr::get( $field, 'class') }} {{ $errors->has($field['name']) ? ' is-invalid' : '' }}" id="{{ $field['name'] }}" placeholder="{{ $field['label'] }}" rows="6" {{ $required }}>
    @if(isset($field['display']))
    @if($field['display'] == 'raw')
    {!! old($field['name'], setting($field['name'])) !!}
    @else
    {{ old($field['name'], setting($field['name'])) }}
    @endif
    @else
    {{ old($field['name'], setting($field['name'])) }}
    @endif
    </textarea>

    @if ($errors->has($field['name'])) <small class="invalid-feedback">{{ $errors->first($field['name']) }}</small> @endif
    @if(isset($field['help']))<small id="email-{{ $field['name'] }}" class="form-text text-muted">{{ $field['help'] }}</small> @endif
</div>
