@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
      <h4 class="text-center">Personal Profile</h4>
    </div>

    <div class="card-body">
        <div class="mb-2 text-center">
            @include('admin.profile.profile_content')
            <a style="margin-top:20px;" class="btn btn-primary" href="{{ route('admin.profiles.index') }}">
                {{ trans('global.edit') }} {{ trans('cruds.profile.title') }}
            </a>
        </div>


    </div>
</div>
@endsection