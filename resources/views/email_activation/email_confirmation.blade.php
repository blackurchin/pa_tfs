@extends('layouts.app')
@section('content')
    <div class="login-box">
            <div class="card-body login-card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">
                        {{ session('warning') }}
                    </div>
                @endif
                @if (session('danger'))
                    <div class="alert alert-warning">
                        {{ session('danger') }}
                        <a href='{{url('/email/activation/1p4m$&s3lf2O20%')}}'class="alert-link">Click here</a>
                    </div>
                @endif
                <p class="mb-0">

                </p>
                <p class="mb-1">
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    {{--</div>--}}
@endsection