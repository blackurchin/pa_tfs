@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            <p>Write the reason</p>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.bilaterals.decline_update',[$bilateral->id]) }}" method="POST" enctype="multipart/form-data"  onsubmit = "return confirm('Are you sure you want to decline?')">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-12 {{ $errors->has('requesting_country') ? 'has-error' : '' }}">
                        <label class="text-center px-6">Reasons :</label><span class="text-danger">*</span>
                        <input type="hidden" name="requesting_country" value="{{ $bilateral->requesting_country }}">
                        <input type="hidden" name="requested_country" value="{{ $bilateral->requested_country }}">

                        <textarea type="text" name="declination" class="form-control" id="declination" placeholder="Reasons..."></textarea>

                        @if($errors->has('declination'))
                            <p class="help-block">
                                {{ $errors->first('declination') }}
                            </p>
                        @endif
                        <p class="helper-block">
                            {{ trans('cruds.bilateral.fields.key_helper') }}
                        </p>
                    </div>
                </div>
                <div>
                    <div class="text-center">
                    <input class="text-center btn btn-sm btn-info px-4" type="submit" value="{{ trans('global.decline') }}">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
