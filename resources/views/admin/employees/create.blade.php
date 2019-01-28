@extends('layouts.index')

@section('CoreContent')
    <h3 class="page-title">@lang('CRM.employee.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.employees.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('CRM.qa_create')
        </div>
        
        @include('admin.employees.form')
        
    </div>

    {!! Form::submit(trans('CRM.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

