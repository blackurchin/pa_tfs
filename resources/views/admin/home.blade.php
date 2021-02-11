@extends('layouts.admin')
@section('content')
<div class="content">
    {{--<div class="row">--}}
        {{--<div class="col-lg-12">--}}
            {{--Home--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="row">

        @if(Auth::user()->hasAnyRole(['admin','encoder']))
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Participant Registrations</span>
                    <span class="info-box-number">{{$user}}</span>
                    <a href="{{ route("admin.users.index") }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        @endif
    <!-- /.col -->
          @if(Auth::user()->hasAnyRole(['admin','encoder','participant']))
            <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-male"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">IPAMS</span>
                    <span class="info-box-number">0</span>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-male"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">SELF</span>
                    <span class="info-box-number">0</span>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-female"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Spouse</span>
                    <span class="info-box-number">0</span>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success-gradient elevation-1"><i class="fas fa-flag"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Invited Countries</span>
                    <span class="info-box-number">{{$countries}}</span>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        @endif
    <!-- /.col -->
        @if(Auth::user()->hasRole(['admin']))
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-print"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Print ID Card</span>
                    <span class="info-box-number">0</span>
                    <a href="{{ route("admin.id_card.index") }}" class=" btnprn small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
       @endif
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection

<script type="text/javascript">
    $(document).ready(function(){
        $('.btnprn').printPage();
    });
</script>

<script src="{{ asset('js/jquery.printPage.js') }}"></script>
<script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>