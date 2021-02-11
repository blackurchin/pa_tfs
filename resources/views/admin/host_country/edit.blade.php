@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }}
        {{--{{ trans('cruds.sponsor.title_singular') }}--}}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.host_country.update", [$host_country->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.sponsor.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($host_country) ? $host_country->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.host_country.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.sponsor.fields.cat') }}*</label>
                <select name="category" id="cat" class="form-control select2">
                    <option value="{{$host_country->category}}"  {{ ($host_country->category) ? 'selected' : '' }}>{{$host_country->category}}</option>
                    {{--<option value disabled {{ old('category', null) === null ? 'selected' : '' }}>{{ trans('global.selectCat') }}</option>--}}
                    <option value="Culture">Culture</option>
                    <option value="Food">Food</option>
                    <option value="Tourist">Tourist Spot</option>
                    <option value="Shopping">Shopping Malls</option>
                </select>@if($errors->has('category'))
                    <p class="help-block">
                        {{ $errors->first('category') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.host_country.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('logo') ? 'has-error' : '' }}">
                <label for="logo">{{ trans('cruds.host_country.fields.logo') }}</label>
                <div class="needsclick dropzone" id="logo-dropzone">

                </div>
                @if($errors->has('logo'))
                    <p class="help-block">
                        {{ $errors->first('logo') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.host_country.fields.logo_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('link') ? 'has-error' : '' }}">
                <label for="link">{{ trans('cruds.host_country.fields.link') }}</label>
                <input type="text" id="link" name="link" class="form-control" value="{{ old('link', isset($host_country) ? $host_country->link : '') }}">
                @if($errors->has('link'))
                    <p class="help-block">
                        {{ $errors->first('link') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.host_country.fields.link_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection

@section('scripts')
<script>
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.host_country.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($host_country) && $host_country->logo)
      var file = {!! json_encode($host_country->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@stop