@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header bg-secondary-gradient">
            {{ trans('global.show') }} {{ trans('cruds.profile.title_singular') }}
        </div>
        <div class="card-body">
                <div class="row">                    {{--Left Content--}}
                    <div class="col-md-12 col-sm-8 pull-left">
                        <div class="card">
                            <div class="card-body">
                                {{--<div class="container">--}}
                                <div class="row">
                                    {{--Left side--}}
                                    <div class="col-sm-3">
                                        {{--<section>--}}
                                            @include('admin.profile.show.photo')
                                        {{--</section>--}}
                                        {{--<section>--}}
                                            @include('admin.profile.show.scancopy')
                                        {{--</section>--}}
                                    </div>
                                    <div class="col-sm-8 card bg-gray-light">
                                        {{--Heading--}}
                                         @include('admin.profile.show.heading')
                                        <hr width="100%">
                                        {{--<h4>Personal Information</h4>--}}
                                        <section>
                                            @include('admin.profile.show.general')
                                        </section>
                                        <hr width="100%">
                                        <h4>FLIGHT DETAILS</h4>
                                        <section>
                                            @include('admin.profile.show.flight')
                                        </section>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="card-footer text-center">
                    <a type="submit" href="{{route('admin.profiles.edit',$profile->id)}}" class="text-center btn btn-success px-4">Edit Profile</a>
                </div>
            </form>
        </div>

    </div>
@endsection
