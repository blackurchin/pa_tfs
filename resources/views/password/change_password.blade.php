@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
        {{ trans('cruds.change_password.title_singular') }}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('users.change.password') }}">
                @csrf
                {{--@foreach ($errors->all() as $error)--}}
                    {{--<p class="text-danger">{{ $error }}</p>--}}
                {{--@endforeach--}}
                <div class="form-group row">
                <label for="firstName" class="col-sm-2 col-form-label">Current Password:<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <input id="password" type="password" class="form-control" name="current_password" placeholder="Current Password" autocomplete="current-password">
                </div>
            </div>
            <div class="form-group row">
                <label for="firstName" class="col-sm-2 col-form-label">New Password:<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <input id="new_password" type="password" class="form-control" name="new_password" placeholder="New Password"  autocomplete="current-password">
                </div>
            </div>
            <div class="form-group row">
                <label for="firstName" class="col-sm-2 col-form-label">Confirm New Password:<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <input id="new_confirm_password" type="password" class="form-control" placeholder="Confirm New Password" name="new_confirm_password" autocomplete="current-password">
                </div>
            </div>

            <div class="card-footer text-center">
                <button type="submit" class="text-center btn btn-info px-4"><i class="fa-fw fas fa-key"></i>Change Password</button>
            </div>
            </form>
        </div>
    </div>
@endsection