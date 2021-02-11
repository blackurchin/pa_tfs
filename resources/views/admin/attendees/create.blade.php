@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header bg-secondary-gradient">
            {{ trans('global.add') }} {{ trans('cruds.attendee.title_singular') }}
        </div>

        <div class="card-body">
            <form action="{{ route("admin.attendees.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="row">
                    {{--Left Content--}}
                    <div class="col-md-12 col-sm-8 pull-left">
                        <div class="card">
                            <small class="text-danger">(Note: Please Fill up all mark *(asterisk) fields)</small>
                            <div class="card-body bg-gray-light">
                                {{--<div class="container">--}}
                                <div class="row">

                                    <div class="col-sm-8">
                                        {{--Heading--}}
                                        @include('admin.attendees.form.heading')
                                        <hr>
                                        <section>
                                            @include('admin.attendees.form.eventDesignation')
                                        </section>
                                        <hr width="100%">
                                        {{--<h4>Personal Information</h4>--}}
                                        <section>
                                            @include('admin.attendees.form.general')
                                        </section>
                                        <hr width="100%">
                                        <h4>FLIGHT DETAILS</h4>
                                        <section>
                                            @include('admin.attendees.form.flight')
                                        </section>
                                        <hr width="100%">
                                        <h4>PASSPORT DETAILS</h4>
                                        <section>
                                            @include('admin.attendees.form.passport')
                                        </section>
                                        <section>
                                            @include('admin.attendees.form.event')
                                        </section>
                                    </div>
                                    {{--Left side--}}
                                    <div class="col-sm-3">
                                        <section>
                                            @include('admin.attendees.form.photo')
                                        </section>
                                        <section>
                                            @include('admin.attendees.form.scancopy')
                                        </section>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


        <div class="card-footer text-center">
            <button type="submit" class="text-center btn btn-success px-4">Register</button>
        </div>
        </form>
    </div>

    </div>
@endsection
