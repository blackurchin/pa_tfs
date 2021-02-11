{{--Upload Passport Scan Copy--}}
<div class="form-group row">
    <div class="card text-white bg-gray-light text-xs-center">
        <div class="card-header bg-info"><h6 class="text-center">Passport Copy</h6></div>
        <div class="card-body">
            <blockquote class="card-bodyquote">
                <strong class="text-danger">Please upload a scanned copy of Passport</strong>
                <hr>
                {{--<div class="form-group {{ $errors->has('passport_photo') ? 'has-error' : '' }}">--}}

                    {{--<div class="needsclick dropzone" id="photo-dropzone">--}}
                    {{--</div>--}}
                    {{--@if($errors->has('passport_photo'))--}}
                        {{--<p class="help-block">--}}
                            {{--{{ $errors->first('passport_photo') }}--}}
                        {{--</p>--}}
                    {{--@endif--}}
                    {{--<p class="helper-block">--}}
                        {{--{{ trans('cruds.profile.fields.photo_helper') }}--}}
                    {{--</p>--}}
                {{--</div>--}}
                <input type="file" name="passport">
            </blockquote>
        </div>
    </div>
</div>

{{--@section('scripts')--}}
    {{--<script>--}}
        {{--Dropzone.options.photoDropzone = {--}}
            {{--url: '{{ route('admin.profiles.storeMedia') }}',--}}
            {{--maxFilesize: 2, // MB--}}
            {{--acceptedFiles: '.jpeg,.jpg,.png,.gif',--}}
            {{--maxFiles: 1,--}}
            {{--addRemoveLinks: true,--}}
            {{--headers: {--}}
                {{--'X-CSRF-TOKEN': "{{ csrf_token() }}"--}}
            {{--},--}}
            {{--params: {--}}
                {{--size: 2,--}}
                {{--width: 4096,--}}
                {{--height: 4096--}}
            {{--},--}}
            {{--success: function (file, response) {--}}
                {{--$('form').find('input[name="passport_photo"]').remove()--}}
                {{--$('form').append('<input type="hidden" name="passport_photo" value="' + response.name + '">')--}}
            {{--},--}}
            {{--removedfile: function (file) {--}}
                {{--file.previewElement.remove()--}}
                {{--if (file.status !== 'error') {--}}
                    {{--$('form').find('input[name="passport_photo"]').remove()--}}
                    {{--this.options.maxFiles = this.options.maxFiles + 1--}}
                {{--}--}}
            {{--},--}}
            {{--init: function () {--}}
                        {{--@if(isset($profile) && $profile->passport_photo)--}}
                {{--var file = {!! json_encode($profile->passport_photo) !!}--}}
                        {{--this.options.addedfile.call(this, file)--}}
                {{--this.options.thumbnail.call(this, file, file.url)--}}
                {{--file.previewElement.classList.add('dz-complete')--}}
                {{--$('form').append('<input type="hidden" name="passport_photo" value="' + file.file_name + '">')--}}
                {{--this.options.maxFiles = this.options.maxFiles - 1--}}
                {{--@endif--}}
            {{--},--}}
            {{--error: function (file, response) {--}}
                {{--if ($.type(response) === 'string') {--}}
                    {{--var message = response //dropzone sends it's own error messages in string--}}
                {{--} else {--}}
                    {{--var message = response.errors.file--}}
                {{--}--}}
                {{--file.previewElement.classList.add('dz-error')--}}
                {{--_ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')--}}
                {{--_results = []--}}
                {{--for (_i = 0, _len = _ref.length; _i < _len; _i++) {--}}
                    {{--node = _ref[_i]--}}
                    {{--_results.push(node.textContent = message)--}}
                {{--}--}}

                {{--return _results--}}
            {{--}--}}
        {{--}--}}
    {{--</script>--}}
{{--@stop--}}