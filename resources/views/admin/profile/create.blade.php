@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header bg-secondary-gradient">
            {{ trans('global.edit') }} {{ trans('cruds.profile.title_singular') }}
        </div>

        <div class="card-body">
            <form action="{{ route("admin.profiles.create") }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    {{--Left Content--}}
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h6>Personal Information </h6>
                            </div>
                            <span class="text-danger">(Note: Please Fill up all mark *(asterisk) fields)</span>
                            <div class="card-body">
                                <div class="content">
                                    <section>
                                        @include('admin.profile.general')
                                    </section>

                                </div>
                            </div>
                        </div>
                    </div>

                    {{--Right Content--}}
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h6>Other Details</h6>
                            </div>
                            <div class="card-body">
                                <div class="content">
                                    {{--///Photo Details--}}
                                    <section>
                                        @include('admin.profile.photo')
                                    </section>
                                    {{--///Passport Details--}}
                                    <section>
                                        @include('admin.profile.passport')
                                    </section>
                                    {{--///Flight Details--}}
                                    <section>
                                        @include('admin.profile.flight')
                                    </section>
                                    {{--///Event Details--}}
                                    <section>
                                        @include('admin.profile.event')
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-success px-4">Update Profile</button>
            </form>

        </div>
    </div>
@endsection

