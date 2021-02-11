@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }}
        {{--{{ trans('cruds.sponsor.title') }}--}}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.host_country.fields.id') }}
                        </th>
                        <td>
                            {{ $host_country->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.host_country.fields.category') }}
                        </th>
                        <td>
                            {{ $host_country->category }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.host_country.fields.name') }}
                        </th>
                        <td>
                            {{ $host_country->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.host_country.fields.logo') }}
                        </th>
                        <td>
                            @if($host_country->logo)
                                <a href="{{ $host_country->logo->getUrl() }}" target="_blank">
                                    <img src="{{ $host_country->logo->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.host_country.fields.link') }}
                        </th>
                        <td>
                            {{ $host_country->link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection