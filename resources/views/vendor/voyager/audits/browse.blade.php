@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing') . ' ' . $dataType->getTranslatedAttribute('display_name_plural'))

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="{{ $dataType->icon }}"></i> {{ $dataType->getTranslatedAttribute('display_name_plural') }}
        </h1>
        @can('delete', app($dataType->model_name))
            @include('voyager::partials.bulk-delete')
        @endcan
        @can('edit', app($dataType->model_name))
            @if (!empty($dataType->order_column) && !empty($dataType->order_display_column))
                <a href="{{ route('voyager.' . $dataType->slug . '.order') }}" class="btn btn-primary btn-add-new">
                    <i class="voyager-list"></i> <span>{{ __('voyager::bread.order') }}</span>
                </a>
            @endif
        @endcan
        @can('delete', app($dataType->model_name))
            @if ($usesSoftDeletes)
                <input type="checkbox" @if ($showSoftDeleted) checked @endif id="show_soft_deletes" data-toggle="toggle"
                    data-on="{{ __('voyager::bread.soft_deletes_off') }}" data-off="{{ __('voyager::bread.soft_deletes_on') }}">
            @endif
        @endcan
        @foreach ($actions as $action)
            @if (method_exists($action, 'massAction'))
                @include('voyager::bread.partials.actions', ['action' => $action, 'data' => null])
            @endif
        @endforeach
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        @if ($isServerSide)
                            <form method="get" class="form-search">
                                <div id="search-input">
                                    <div class="col-2">
                                        <select id="search_key" name="key">
                                            @foreach ($searchNames as $key => $name)
                                                <option value="{{ $key }}"
                                                    @if ($search->key == $key || (empty($search->key) && $key == $defaultSearchKey)) selected @endif>{{ $name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <select id="filter" name="filter">
                                            <option value="contains" @if ($search->filter == 'contains') selected @endif>
                                                {{ __('generic.contains') }}</option>
                                            <option value="equals" @if ($search->filter == 'equals') selected @endif>=
                                            </option>
                                        </select>
                                    </div>
                                    <div class="input-group col-md-12">
                                        <input type="text" class="form-control" placeholder="{{ __('generic.search') }}"
                                            name="s" value="{{ $search->value }}">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-lg" type="submit">
                                                <i class="voyager-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                @if (Request::has('sort_order') && Request::has('order_by'))
                                    <input type="hidden" name="sort_order" value="{{ Request::get('sort_order') }}">
                                    <input type="hidden" name="order_by" value="{{ Request::get('order_by') }}">
                                @endif
                            </form>
                        @endif
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        @if ($showCheckboxColumn)
                                            <th class="dt-not-orderable">
                                                <input type="checkbox" class="select_all">
                                            </th>
                                        @endif
                                        @foreach ($dataType->browseRows as $row)
                                            <th>
                                                @if ($isServerSide && in_array($row->field, $sortableColumns))
                                                    <a href="{{ $row->sortByUrl($orderBy, $sortOrder) }}">
                                                @endif
                                                {{ $row->getTranslatedAttribute('display_name') }}
                                                @if ($isServerSide)
                                                    @if ($row->isCurrentSortField($orderBy))
                                                        @if ($sortOrder == 'asc')
                                                            <i class="voyager-angle-up pull-right"></i>
                                                        @else
                                                            <i class="voyager-angle-down pull-right"></i>
                                                        @endif
                                                    @endif
                                                    </a>
                                                @endif
                                            </th>
                                        @endforeach
                                        <th class="actions text-right dt-not-orderable">
                                            {{ __('voyager::generic.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataTypeContent as $data)
                                        <tr>
                                            @if ($showCheckboxColumn)
                                                <td>
                                                    <input type="checkbox" name="row_id"
                                                        id="checkbox_{{ $data->getKey() }}" value="{{ $data->getKey() }}">
                                                </td>
                                            @endif
                                            @foreach ($dataType->browseRows as $row)
                                                @php
                                                    if ($data->{$row->field . '_browse'}) {
                                                        $data->{$row->field} = $data->{$row->field . '_browse'};
                                                    }
                                                @endphp
                                                <td class="hover:bg-blue-100">
                                                    @if (isset($row->details->view_browse))
                                                        @include($row->details->view_browse, [
                                                            'row' => $row,
                                                            'dataType' => $dataType,
                                                            'dataTypeContent' => $dataTypeContent,
                                                            'content' => $data->{$row->field},
                                                            'view' => 'browse',
                                                            'options' => $row->details,
                                                        ])
                                                    @elseif (isset($row->details->view))
                                                        @include($row->details->view, [
                                                            'row' => $row,
                                                            'dataType' => $dataType,
                                                            'dataTypeContent' => $dataTypeContent,
                                                            'content' => $data->{$row->field},
                                                            'action' => 'browse',
                                                            'view' => 'browse',
                                                            'options' => $row->details,
                                                        ])
                                                    @elseif ($row->field == 'user_id')
                                                        <div>
                                                            {{ $data->user->name }}
                                                        </div>
                                                    @elseif ($row->field == 'event')
                                                        <div class="primary">
                                                            <span @class([
                                                                'label',
                                                                'label-info' => $data->event == 'created',
                                                                'label-danger' => $data->event == 'deleted',
                                                                'label-primary' => $data->event == 'updated',
                                                                'label-success' => $data->event == 'restored',
                                                            ])>
                                                                {{ trans('auditoria.' . $data->event) }}
                                                            </span>
                                                        </div>
                                                    @elseif ($row->field == 'auditable_type')
                                                        <div>
                                                            {!! str_replace('App\Models\\', ' ', $data->auditable_type) !!}
                                                        </div>
                                                    @elseif ($row->field == 'old_values')
                                                        <div>
                                                            <table class="table">
                                                                @forelse ($data->old_values as $attribute => $value)
                                                                    <tr>
                                                                        <td><b
                                                                                class="label label-primary">{{ $attribute }}:</b>
                                                                        </td>
                                                                        <td>
                                                                            {{ mb_strlen($value) > 20 ? mb_substr($value, 0, 20) . ' ...' : $value ?? 'No existía ningun valor' }}
                                                                        </td>
                                                                    </tr>
                                                                    @empty
                                                                        <tr>
                                                                            <td>
                                                                                {{ 'No hay datos' }}
                                                                            </td>
                                                                        </tr>
                                                                    @endforelse
                                                                </table>
                                                            </div>
                                                        @elseif ($row->field == 'new_values')
                                                            <div>
                                                                <table class="table">
                                                                    @forelse ($data->new_values as $attribute => $value)
                                                                        <tr>
                                                                            <td><b
                                                                                    class="label label-primary">{{ $attribute }}:</b>
                                                                            </td>
                                                                            <td>
                                                                                {{ mb_strlen($value) > 20 ? mb_substr($value, 0, 20) . ' ...' : $value ?? 'No existía ningun valor ' }}
                                                                            </td>
                                                                        </tr>
                                                                    @empty
                                                                        <tr>
                                                                            <td>
                                                                                {{ 'No hay datos' }}
                                                                            </td>
                                                                        </tr>
                                                                    @endforelse
                                                                </table>
                                                            </div>
                                                        @endif
                                                    </td>
                                                @endforeach
                                                <td class="no-sort no-click bread-actions">
                                                    @foreach ($actions as $action)
                                                        @if (!method_exists($action, 'massAction'))
                                                            @include('voyager::bread.partials.actions', [
                                                                'action' => $action,
                                                            ])
                                                        @endif
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @if ($isServerSide)
                                <div class="row">
                                    {{ $dataTypeContent->appends([
                                            's' => $search->value,
                                            'filter' => $search->filter,
                                            'key' => $search->key,
                                            'order_by' => $orderBy,
                                            'sort_order' => $sortOrder,
                                            'showSoftDeleted' => $showSoftDeleted,
                                        ])->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Single delete modal --}}
        <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }}
                            {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
                    </div>
                    <div class="modal-footer">
                        <form action="#" id="delete_form" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-danger pull-right delete-confirm"
                                value="{{ __('voyager::generic.delete_confirm') }}">
                        </form>
                        <button type="button" class="btn btn-default pull-right"
                            data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    @stop

    @section('css')
        @if (!$dataType->server_side && config('dashboard.data_tables.responsive'))
            <link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">
        @endif
    @stop

    @section('javascript')
        <!-- DataTables -->
        @if (!$dataType->server_side && config('dashboard.data_tables.responsive'))
            <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
        @endif
        <script>
            $(document).ready(function() {
                @if (!$dataType->server_side)
                    var table = $('#dataTable').DataTable({!! json_encode(
                        array_merge(
                            [
                                'order' => $orderColumn,
                                'language' => __('voyager::datatable'),
                                'columnDefs' => [['targets' => 'dt-not-orderable', 'searchable' => false, 'orderable' => false]],
                            ],
                            config('voyager.dashboard.data_tables', []),
                        ),
                        true,
                    ) !!});
                @else
                    $('#search-input select').select2({
                        minimumResultsForSearch: Infinity
                    });
                @endif

                @if ($isModelTranslatable)
                    $('.side-body').multilingual();
                    $('#dataTable').on('draw.dt', function() {
                        $('.side-body').data('multilingual').init();
                    })
                @endif
                $('.select_all').on('click', function(e) {
                    $('input[name="row_id"]').prop('checked', $(this).prop('checked')).trigger('change');
                });
            });


            var deleteFormAction;
            $('td').on('click', '.delete', function(e) {
                $('#delete_form')[0].action = '{{ route('voyager.' . $dataType->slug . '.destroy', '__id') }}'.replace(
                    '__id', $(this).data('id'));
                $('#delete_modal').modal('show');
            });

            @if ($usesSoftDeletes)
                @php
                    $params = [
                        's' => $search->value,
                        'filter' => $search->filter,
                        'key' => $search->key,
                        'order_by' => $orderBy,
                        'sort_order' => $sortOrder,
                    ];
                @endphp
                $(function() {
                    $('#show_soft_deletes').change(function() {
                        if ($(this).prop('checked')) {
                            $('#dataTable').before(
                                '<a id="redir" href="{{ route('voyager.' . $dataType->slug . '.index', array_merge($params, ['showSoftDeleted' => 1]), true) }}"></a>'
                            );
                        } else {
                            $('#dataTable').before(
                                '<a id="redir" href="{{ route('voyager.' . $dataType->slug . '.index', array_merge($params, ['showSoftDeleted' => 0]), true) }}"></a>'
                            );
                        }

                        $('#redir')[0].click();
                    })
                })
            @endif
            $('input[name="row_id"]').on('change', function() {
                var ids = [];
                $('input[name="row_id"]').each(function() {
                    if ($(this).is(':checked')) {
                        ids.push($(this).val());
                    }
                });
                $('.selected_ids').val(ids);
            });
        </script>
    @stop
