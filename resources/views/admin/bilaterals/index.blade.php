@extends('layouts.admin')
@section('content')
    @can('bilateral_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.bilaterals.create") }}">
                    {{ trans('global.add') }} {{ trans('cruds.bilateral.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.bilateral.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Bilateral">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.bilateral.fields.id') }}
                        </th>

                        <th>
                            {{ trans('cruds.bilateral.fields.requesting') }}
                        </th>
                        <th>
                            {{ trans('cruds.bilateral.fields.requested') }}
                        </th>

                        <th>
                            {{ trans('cruds.bilateral.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.bilateral.fields.room') }}
                        </th>
                        <th>
                            {{ trans('cruds.bilateral.fields.date') }}
                        </th>
                        <th>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bilaterals as $key => $bilateral)
                        <tr data-entry-id="{{ $bilateral->id }}">
                            <td>

                            </td>
                            <td>
                                {{ ++$key ?? '' }}
                            </td>
                            <td>
                                {{ $bilateral->requesting_country ?? '' }}
                            </td>
                            <td>
                                {{ $bilateral->requested_country ?? '' }}
                            </td>
                            <td>
                                @if(!$bilateral->status)
                                    <span class="btn btn-xs btn-warning">Pending</span>
                                @else
                                    <span class="btn btn-xs btn-success"> {{ $bilateral->status ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if(!$bilateral->room)
                                    <span class="btn btn-xs btn-warning">For Reservation</span>
                                @else
                                    {{ $bilateral->room ?? '' }}
                                @endif
                            </td>

                            <td>
                                @if(!$bilateral->schedule)
                                    <span class="btn btn-xs btn-warning">For Reservation</span>
                                @else
                                    {{\Carbon\Carbon::parse( $bilateral->schedule)->format('j F, Y') ?? ''}} -
                                    {{\Carbon\Carbon::parse( $bilateral->time)->format('H:i:s') ?? ''}}

                                @endif
                            </td>
                            <td>
                                    @can('bilateral_edit')
                                    {{--@if (Auth::user()->hasRole(['encoder']))--}}
                                    @if($bilateral->requested_country==Auth::user()->country && $bilateral->status==null && $bilateral->declination==null)
                                        <form action="{{ route('admin.bilaterals.accept', $bilateral->id) }}" method="POST" onsubmit = "return confirm('Are you sure you want to accept?')"style="display: inline-block;">
                                            <input type="hidden" name="_method" value="PUT">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="requesting_country" value="{{ $bilateral->requesting_country }}">
                                            <input type="hidden" name="requested_country" value="{{ $bilateral->requested_country }}">
                                            <input type="submit" class="btn btn-xs btn-success" value="{{ trans('global.accept') }}">
                                        </form>
                                       <a class="btn btn-xs btn-warning" href="{{ route('admin.bilaterals.decline', $bilateral->id) }}">
                                           {{ trans('global.decline') }}</a>


                                    @elseif(($bilateral->requested_country==Auth::user()->country && $bilateral->status=='Accepted') ||
                                        ($bilateral->requesting_country==Auth::user()->country && $bilateral->status=='Accepted')   ||
                                        ($bilateral->requesting_country==Auth::user()->country && $bilateral->status=='Reserved')  ||
                                        ($bilateral->requested_country==Auth::user()->country && $bilateral->status=='Reserved'))
                                            <a class="btn btn-xs btn-danger" href="{{ route('admin.bilaterals.cancel', $bilateral->id) }}">
                                                {{ trans('global.cancel') }}</a>
                                    @endif

                                   @endcan
                                    @can('bilateral_edit')
                                      @if (Auth::user()->hasRole(['admin']) || $bilateral->requesting_country==Auth::user()->country )
                                            <a class="btn btn-xs btn-info" href="{{ route('admin.bilaterals.edit', $bilateral->id) }}">
                                            {{ trans('global.edit') }}
                                         @endif
                                      </a>
                                    @endcan
                                    @can('bilateral_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.bilaterals.show', $bilateral->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                @can('bilateral_delete')
                                        @if (Auth::user()->hasRole(['admin']) || $bilateral->requesting_country==Auth::user()->country )
                                           <form action="{{ route('admin.bilaterals.destroy', $bilateral->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                               <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                        </form>
                                     @endif
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
             @can('bilateral_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.bilaterals.massDestroy') }}",
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
//                order: [[ 1, 'desc' ]],
                pageLength: 100,
            });
            $('.datatable-Bilateral:not(.ajaxTable)').DataTable({ buttons: dtButtons })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })

    </script>
@endsection