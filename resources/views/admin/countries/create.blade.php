@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.country.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.countries.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('country_code') ? 'has-error' : '' }}">
                <label for="key">{{ trans('cruds.country.fields.country_code') }}*</label>
                <input type="text" id="key" name="country_code" class="form-control" value="{{ old('country', isset($country) ? $country->country_code : '') }}" required>
                @if($errors->has('country_code'))
                    <p class="help-block">
                        {{ $errors->first('country_code') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.country.fields.key_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="value">{{ trans('cruds.country.fields.description') }}</label>
                <textarea id="description" name="description" class="form-control ">{{ old('description', isset($description) ? $country->description : '') }}</textarea>
                @if($errors->has('description'))
                    <p class="help-block">
                        {{ $errors->first('description') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.country.fields.value_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection