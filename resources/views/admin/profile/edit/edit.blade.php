@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header bg-secondary-gradient">
            {{ trans('global.edit') }} {{ trans('cruds.profile.title_singular') }}
        </div>

        <div class="card-body">
            <form action="{{ route("admin.profiles.update", [$profile->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    {{--Left Content--}}
                    <div class="col-md-12 col-sm-8 pull-left">
                        <div class="card">
                            <small class="text-danger">(Note: Please Fill up all mark *(asterisk) fields)</small>
                            <div class="card-body ">
                                {{--<div class="container">--}}
                                    <div class="row">
                                        {{--Left side--}}
                                        <div class="col-sm-3">
                                            <section>
                                                @include('admin.profile.update.photo')
                                            </section>
                                            <section>
                                                @include('admin.profile.update.scancopy')
                                            </section>
                                            {{--</form>--}}
                                        </div>

                                            <div class="col-sm-8 card bg-gray-light">
                                                {{--Heading--}}
                                                @include('admin.profile.heading')
                                                <hr>
                                                <section>
                                                    @include('admin.profile.edit.eventDesignation')
                                                </section>
                                                <hr width="100%">
                                                    {{--<h4>Personal Information</h4>--}}
                                                 <section>
                                                    @include('admin.profile.edit.general')
                                                </section>
                                                <hr width="100%">
                                                <h4>FLIGHT DETAILS</h4>
                                                <section>
                                                    @include('admin.profile.edit.flight')
                                                </section>
                                                <hr width="100%">
                                                <h4>PASSPORT DETAILS</h4>
                                                <section>
                                                    @include('admin.profile.edit.passport')
                                                </section>
                                                <hr width="100%">
                                                <h4>ACCOMODATION INFO</h4>
                                                <section>
                                                    @include('admin.profile.edit.event')
                                                </section>
                                            </div>
                                            {{--Left side--}}
                                            {{--<div class="col-sm-3">--}}
                                               {{--<section>--}}
                                                    {{--@include('admin.profile.edit.photo')--}}
                                               {{--</section>--}}
                                                {{--<hr>--}}
                                                {{--<section>--}}
                                                    {{--@include('admin.profile.edit.scancopy')--}}
                                                {{--</section>--}}

                                            {{--</div>--}}
                                    </div>

                                </div>

                            </div>
                        </div>

                </div>
                <div class="card-footer text-center">
                    <a type="submit" href="{{route('admin.profiles.show',$profile->id)}}" class="text-center btn btn-secondary px-4">Back</a>
                    <button type="submit" class="text-center btn btn-success px-4">Update Profile</button>
                </div>
            </form>
        </div>

    </div>
@endsection
