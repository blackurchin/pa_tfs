@extends('layouts.app')
@section('content')
    <div class="signup-form">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-warning">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('emailActivation') }}">
            @csrf
            <h2>Email Activation</h2>
            <p class="hint-text">Activate your email. It's free and only takes a minute.</p>
            <div class="form-group">
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('name') }}" placeholder="Re-type username" required autocomplete="name" autofocus>
                @error('username')
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="new-email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address"  name="email" required autocomplete="new-email">
                @error('email')
                <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="new-email-confirm" type="email" class="form-control" name="email_confirmation"  placeholder="Confirm Email Address"  required autocomplete="new-email">
            </div>
            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Activate Now</button>
            </div>
        </form>
    </div>
@endsection

<style type="text/css">
    body{
        color: #fff;
        background: #63738a;
        font-family: 'Roboto', sans-serif;
    }
    .form-control{
        height: 40px;
        box-shadow: none;
        color: #969fa4;
    }
    .form-control:focus{
        border-color: #5cb85c;
    }
    .form-control, .btn{
        border-radius: 3px;
    }
    .signup-form{
        width: 400px;
        margin: 0 auto;
        padding: 30px 0;
    }
    .signup-form h2{
        color: #636363;
        margin: 0 0 15px;
        position: relative;
        text-align: center;
    }
    .signup-form h2:before, .signup-form h2:after{
        content: "";
        height: 2px;
        width: 30%;
        background: #d4d4d4;
        position: absolute;
        top: 50%;
        z-index: 2;
    }
    .signup-form h2:before{
        left: 0;
    }
    .signup-form h2:after{
        right: 0;
    }
    .signup-form .hint-text{
        color: #999;
        margin-bottom: 30px;
        text-align: center;
    }
    .signup-form form{
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .signup-form .form-group{
        margin-bottom: 20px;
    }
    .signup-form input[type="checkbox"]{
        margin-top: 3px;
    }
    .signup-form .btn{
        font-size: 16px;
        font-weight: bold;
        min-width: 140px;
        outline: none !important;
    }
    .signup-form .row div:first-child{
        padding-right: 10px;
    }
    .signup-form .row div:last-child{
        padding-left: 10px;
    }
    .signup-form a{
        color: #fff;
        text-decoration: underline;
    }
    .signup-form a:hover{
        text-decoration: none;
    }
    .signup-form form a{
        color: #5cb85c;
        text-decoration: none;
    }
    .signup-form form a:hover{
        text-decoration: underline;
    }
</style>