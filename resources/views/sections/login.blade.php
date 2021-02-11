<section id="login" class="section-bg wow fadeInUp mt-8">
    <div class="container">
        <div class="section-header">
            <h2>Login</h2>
        </div>
        <div class="card" style="height:250px; ">
            <div class="card-body login-card-body">
        <div class="form">
            <div id="errormessage"></div>
            {{--<form action="" method="post" role="form" class="contactForm">--}}
                <p class="login-box-msg">Sign in to start your session</p>
                @if(\Session::has('message'))
                    <p class="alert alert-info">
                        {{ \Session::get('message') }}
                    </p>
                @endif
                <form action="{{ route('login') }}" method="POST" role="form" class="contactForm">
                    {{ csrf_field() }}
                    {{--<div class="form-row">--}}
                    {{--<div class="form-group col-md-12">--}}
                        {{--<select name="country" id="country" class="form-control select2" data-rule="minlen:4" data-msg="Please select country">--}}
                            {{--<option value disabled {{ old('country', null) === null ? 'selected' : '' }}>{{ trans('global.selectCountry') }}</option>--}}
                            {{--@foreach($countries as $country)--}}
                                {{--<option value="">{{$country->description}}</option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}
                        {{--<div class="validation"></div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        {{--<input type="text" name="email" class="form-control" id="email" placeholder="Email" data-rule="minlen:4" data-msg="Please enter email" />--}}
                        <input type="email" id="email"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ trans('global.login_email') }}" name="email" value="{{ old('email', null) }}" data-rule="minlen:4" data-msg="Please enter email">
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ trans('global.login_password') }}" name="password"  data-rule="minlen:4" data-msg="Please enter password">
                    {{--<input type="password" class="form-control" name="password" id="password" placeholder="Password" data-rule="email" data-msg="Please enter password" />--}}
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="text-center"><button type="submit">Login</button></div>
            </form>
        </div>

    </div>
        </div>
    </div>
</section><!-- #contact -->
