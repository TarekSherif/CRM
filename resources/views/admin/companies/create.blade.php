@extends('layouts.index')

@section('CoreContent')
    <h3 class="page-title">@lang('CRM.company.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.companies.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('CRM.qa_create')
        </div>
        
        @include('admin.companies.form')

    </div>

    {!! Form::submit(trans('CRM.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

