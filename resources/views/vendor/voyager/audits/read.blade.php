@extends('voyager::master')

@section('page_title', __('voyager::generic.view') . ' ' . $dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> {{ __('voyager::generic.viewing') }}
        {{ ucfirst($dataType->getTranslatedAttribute('display_name_singular')) }} &nbsp;

        @can('delete', $dataTypeContent)
            <a href="javascript:;" title="{{ __('voyager::generic.delete') }}" class="btn btn-danger delete"
                data-id="{{ $dataTypeContent->getKey() }}" id="delete-{{ $dataTypeContent->getKey() }}">
                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.delete') }}</span>
            </a>
        @endcan
        @can('browse', $dataTypeContent)
            <a href="{{ route('voyager.' . $dataType->slug . '.index') }}" class="btn btn-warning">
                <i class="glyphicon glyphicon-list"></i> <span
                    class="hidden-xs hidden-sm">{{ __('voyager::generic.return_to_list') }}</span>
            </a>
        @endcan
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content read container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered" style="padding-bottom:5px;">
                    <!-- form start -->
                    @foreach ($dataType->readRows as $row)
                        @php
                            if ($dataTypeContent->{$row->field . '_read'}) {
                                $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field . '_read'};
                            }
                        @endphp
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $row->getTranslatedAttribute('display_name') }}</h3>
                        </div>

                        <div class="panel-body">
                            @if (isset($row->details->view_read))
                                @include($row->details->view_read, [
                                    'row' => $row,
                                    'dataType' => $dataType,
                                    'dataTypeContent' => $dataTypeContent,
                                    'content' => $dataTypeContent->{$row->field},
                                    'view' => 'read',
                                    'options' => $row->details,
                                ])
                            @elseif (isset($row->details->view))
                                @include($row->details->view, [
                                    'row' => $row,
                                    'dataType' => $dataType,
                                    'dataTypeContent' => $dataTypeContent,
                                    'content' => $dataTypeContent->{$row->field},
                                    'action' => 'read',
                                    'view' => 'read',
                                    'options' => $row->details,
                                ])
                            @elseif ($row->field == 'user_id')
                                @include('voyager::multilingual.input-hidden-bread-read')
                                <div>
                                    {{ $dataTypeContent->user->name }}
                                </div>
                            @elseif ($row->field == 'event')
                                @include('voyager::multilingual.input-hidden-bread-read')
                                <span @class([
                                    'label',
                                    'label-info' => $dataTypeContent->event == 'created',
                                    'label-danger' => $dataTypeContent->event == 'deleted',
                                    'label-primary' => $dataTypeContent->event == 'updated',
                                    'label-success' => $dataTypeContent->event == 'restored',
                                ])>
                                    {{ $dataTypeContent->event }}
                                </span>
                            @elseif ($row->field == 'auditable_type')
                                @include('voyager::multilingual.input-hidden-bread-read')
                                <div>
                                    {!! str_replace('App\Models\\', ' ', $dataTypeContent->auditable_type) !!}
                                </div>
                            @elseif ($row->field == 'old_values')
                                @include('voyager::multilingual.input-hidden-bread-read')
                                <div>
                                    <table class="table">
                                        @foreach ($dataTypeContent->old_values as $attribute => $value)
                                            <tr>
                                                <td><b class="label label-primary">{{ $attribute }}:</b>
                                                </td>
                                                <td>
                                                    {{ $value }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            @elseif ($row->field == 'new_values')
                                @include('voyager::multilingual.input-hidden-bread-read')
                                <div>
                                    <table class="table">
                                        @foreach ($dataTypeContent->new_values as $attribute => $value)
                                            <tr>
                                                <td><b class="label label-primary">{{ $attribute }}:</b>
                                                </td>
                                                <td>
                                                    {{ $value }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            @else
                                @include('voyager::multilingual.input-hidden-bread-read')
                                <p>
                                    {{ is_array($dataTypeContent->{$row->field}) ? implode('- ', $dataTypeContent->{$row->field}) : htmlspecialchars($dataTypeContent->{$row->field}) }}
                                </p>
                            @endif
                        </div><!-- panel-body -->
                        @if (!$loop->last)
                            <hr style="margin:0;">
                        @endif
                    @endforeach

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
                    <form action="{{ route('voyager.' . $dataType->slug . '.index') }}" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                            value="{{ __('voyager::generic.delete_confirm') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right"
                        data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('javascript')
    @if ($isModelTranslatable)
        <script>
            $(document).ready(function() {
                $('.side-body').multilingual();
            });
        </script>
    @endif
    <script>
        var deleteFormAction;
        $('.delete').on('click', function(e) {
            var form = $('#delete_form')[0];

            if (!deleteFormAction) {
                // Save form action initial value
                deleteFormAction = form.action;
            }

            form.action = deleteFormAction.match(/\/[0-9]+$/) ?
                deleteFormAction.replace(/([0-9]+$)/, $(this).data('id')) :
                deleteFormAction + '/' + $(this).data('id');

            $('#delete_modal').modal('show');
        });
    </script>
@stop
