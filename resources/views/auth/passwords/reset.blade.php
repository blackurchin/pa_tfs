@extends('layouts.app')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <div class="login-logo">
            <a href="#">
                {{--{{ trans('panel.site_title') }}--}}
                <h2>44th IPAMS and 6th SELF</h2>

            </a>
        </div>
    </div>
    <div class="card">
        <section class="login_content">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        <div class="card-body login-card-body">
            <p class="login-box-msg">{{ trans('global.reset_password') }}</p>
            <form method="POST" action="{{ route('password.reset') }}">
                {{ csrf_field() }}
                <div>
                    <input name="token" value="{{ $token ?? '' }}" type="hidden">
                    <div class="form-group has-feedback">
                        <input type="email" name="email" class="form-control" required placeholder="{{ trans('global.login_email') }}">
                        @if($errors->has('email'))
                            <p class="help-block text-danger">
                                {{ $errors->first('email') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" required placeholder="{{ trans('global.login_password') }}">
                        @if($errors->has('password'))
                            <p class="help-block text-danger">
                                {{ $errors->first('password') }}
                            </p>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password_confirmation" class="form-control" required placeholder="{{ trans('global.login_password_confirmation') }}">
                        @if($errors->has('password_confirmation'))
                            <p class="help-block">
                                {{ $errors->first('password_confirmation') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ trans('global.reset_password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        </section>
    </div>
</div>
@endsection