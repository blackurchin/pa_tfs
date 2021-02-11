@extends('layouts.admin')
@section('content')
    @include('admin.participants.modal.create')
    <div class="text-left">
        <a href="#" class="btn btn-success btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">
            Invite Participant</a>
    </div>
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.Participant.invited_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.email_verified_at') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($participants as $key => $par)
                        <tr data-entry-id="{{ $par->id }}">
                            <td>

                            </td>
                            <td>
                                {{ ++$key ?? '' }}
                            </td>
                            <td>
                                {{ $par->name ?? '' }}
                            </td>
                            <td>
                                {{ $par->email ?? '' }}
                            </td>
                            <td>
                                {{ $par->country ?? '' }}
                            </td>
                            <td>
                                {{ $par->email_verified_at ?? '' }}
                            </td>
                            <td>
                                {{--@can('user_show')--}}
                                    {{--<a class="btn btn-xs btn-primary" href="{{ route('admin.participants.show', $user->id) }}">--}}
                                        {{--{{ trans('global.view') }}--}}
                                    {{--</a>--}}
                                {{--@endcan--}}
                                @can('user_delete')
                                    <form action="{{ route('admin.participants.destroy',$par->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
                    @can('user_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.participants.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                        return $(entry).data('entry-id')
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
                        $.ajax({
                            headers: {'x-csrf-token': _token},
                            method: 'POST',
                            url: config.url,
                            data: { ids: ids, _method: 'DELETE' }})
                            .done(function () { location.reload() })
                    }
                }
            }
            dtButtons.push(deleteButton)
            @endcan

$.extend(true, $.fn.dataTable.defaults, {
                order: [[ 1, 'desc' ]],
                pageLength: 100,
            });
            $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })

    </script>
@endsection