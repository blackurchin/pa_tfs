@extends('layouts.admin')
@section('content')
    @if(is_null($checkProfile))
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong>Note:</strong> Please Update your Profile to help us serve you better.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-header bg-secondary-gradient">
            {{ trans('global.edit') }} {{ trans('cruds.profile.title_singular') }}
        </div>

        <div class="card-body">
            <form action="{{ route("admin.profiles.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="row">
                    {{--Left Content--}}
                    <div class="col-md-12 col-sm-8 pull-left">
                        <div class="card">
                            <small class="text-danger">(Note: Please Fill up all mark *(asterisk) fields)</small>
                            <div class="card-body">
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

                                            {{--Right Side--}}

                                            <div class="col-sm-8 card bg-gray-light">
                                                {{--Heading--}}
                                                @include('admin.profile.heading')
                                                <hr>
                                                <section>
                                                    @include('admin.profile.update.eventDesignation')
                                                </section>
                                                <hr width="100%">
                                                    {{--<h4>Personal Information</h4>--}}
                                                 <section>
                                                    @include('admin.profile.update.general')
                                                </section>
                                                <hr width="100%">
                                                <h4>FLIGHT DETAILS</h4>
                                                <section>
                                                    @include('admin.profile.update.flight')
                                                </section>
                                                <hr width="100%">
                                                <h4>PASSPORT DETAILS</h4>
                                                <section>
                                                    @include('admin.profile.update.passport')
                                                </section>
                                                <hr width="100%">
                                                <h4>ACCOMODATION INFO</h4>
                                                <section>
                                                    @include('admin.profile.update.event')
                                                </section>

                                            </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="text-center btn btn-success px-4">Update Profile</button>
                </div>
            </form>
        </div>

    </div>
@endsection
