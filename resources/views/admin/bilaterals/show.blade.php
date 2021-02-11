@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }}
        {{ trans('cruds.bilateral.title') }}
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
            <tr>
                <th>
                    {{ trans('cruds.bilateral.fields.requesting')}}:
                </th>
                <td>
                    {{$bilateral->requesting_country}}
                </td>
                <th>
                    {{ trans('cruds.bilateral.fields.requested')}}:
                </th>
                <td>
                    {{$bilateral->requested_country}}
                </td>
            </tr>
            <tr>
                <th>
                    {{ trans('cruds.bilateral.fields.status')}}:
                </th>
                @if(!$bilateral->status)
                    <td><span class="btn btn-xs btn-warning">Pending</span></td>
                @else
                    <td><span class="btn btn-xs btn-success">{{$bilateral->status}}</span></td>
                @endif
                <th>
                    {{ trans('cruds.bilateral.fields.reason')}}:
                </th>
                <td>
                    {{$bilateral->declination}}
                </td>
            </tr>
            <tr>
                <th>
                    {{ trans('cruds.bilateral.fields.requesting cancel')}}:
                </th>
                <td>{{$bilateral->reason_requesting}}</td>
                <th>
                    {{ trans('cruds.bilateral.fields.requested cancel')}}:
                </th>

                <td>{{$bilateral->reason_requested}}</td>
             </tr>
            <tr>
                <th>
                    {{ trans('cruds.bilateral.fields.room')}}:
                </th>

                @if(!$bilateral->room)
                    <td><span class="btn btn-xs btn-warning">For Reservation</span></td>
                @else
                   <td><span class="btn btn-xs btn-info">{{$bilateral->room}}</span></td>
                @endif
                <th>
                    {{ trans('cruds.bilateral.fields.date')}}:
                </th>

                    @if(!$bilateral->schedule)
                    <td><span class="btn btn-xs btn-warning">For Reservation</span></td>
                    @else
                    <td><span class="btn btn-xs btn-info">{{\Carbon\Carbon::parse( $bilateral->schedule)->format('j F, Y') ?? ''}} -
                            {{\Carbon\Carbon::parse( $bilateral->time)->format('H:i:s') ?? ''}}</span></td>
                    @endif

            </tr>
            </tbody>
        </table>
        <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
            {{ trans('global.back_to_list') }}
        </a>
    </div>
</div>


@endsection
