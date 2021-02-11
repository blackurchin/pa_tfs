@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }}
        {{ trans('cruds.bilateral.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.bilaterals.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <label class="text-center px-4">{{ trans('cruds.bilateral.fields.requesting')}} :</label><span class="text-danger">*</span>
                <div class="form-group col-md-3 {{ $errors->has('requesting_country') ? 'has-error' : '' }}">
                    <select name="requesting_country" id="inputEvent" class="form-control custom-select my-1 mr-sm-2" required>
                    @if(Auth::user()->hasRole(['admin']))
                            <option disabled selected>-Choose {{ trans('cruds.bilateral.fields.requesting')}} -</option>
                            @foreach($countries as $country)
                                <option>{{$country->name}}</option>
                            @endforeach
                    @else
                        @foreach($countries as $country)
                            <option>{{$country->name}}</option>
                        @endforeach
                    @endif
                    </select>
                    @if($errors->has('requesting_country'))
                        <p class="help-block">
                            {{ $errors->first('requesting_country') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.bilateral.fields.key_helper') }}
                    </p>
                </div>
                <label class="text-center px-2">{{ trans('cruds.bilateral.fields.requested')}} :</label><span class="text-danger">*</span>
                <div class="form-group col-md-3">
                    <select name="requested_country" id="inputDesignation" class="form-control custom-select my-1 mr-sm-2" required>
                        <option disabled selected>-Choose {{ trans('cruds.bilateral.fields.requested')}} -</option>
                         @if(Auth::user()->hasRole(['admin']))
                        @foreach($countries as $country)
                            <option>{{$country->name}}</option>
                        @endforeach
                       @else
                            @foreach($r_countries as $country)
                                <option>{{$country->name}}</option>
                            @endforeach
                      @endif
                    </select>
                    @if($errors->has('requested_country'))
                        <p class="help-block">
                            {{ $errors->first('requested_country') }}
                        </p>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.bilateral.fields.key_helper') }}
                    </p>
                </div>
            </div>
            @if(Auth::user()->hasRole(['admin']))
            <div class="form-row">
                <label class="text-center px-4"  style="margin-left:6.5%;">{{ trans('cruds.bilateral.fields.room')}} :</label>
                <div class="form-group col-md-3">

                    <input type="text" name="room" class="form-control col-md-12" id="room" placeholder="Room">

                    <p class="helper-block">
                        {{ trans('cruds.bilateral.fields.key_helper') }}
                    </p>
                </div>
                <label class="text-center px-5">{{ trans('cruds.bilateral.fields.date')}} :</label>
                <div class="form-group col-md-3">
                    {{--<label for="inputState">Arrival</label>--}}
                    <input type="text" name="time" class="form-control timepicker" id="time" placeholder="Time (24HR format)">
                </div>
                <div class="form-group col-md-3">
                    {{--<label for="inputState">Arrival</label>--}}
                    <input type="text" name="schedule" class="form-control date" id="schedule" placeholder=" Date">
                </div>
                    <p class="helper-block">
                        {{ trans('cruds.bilateral.fields.key_helper') }}
                    </p>
                 </div>
            @endif
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
