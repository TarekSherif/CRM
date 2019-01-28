@extends('layouts.index')

@section('CoreContent')
    <h3 class="page-title">@lang('CRM.employee.title')</h3>
    
    {!! Form::model($employee, ['method' => 'PUT', 'route' => ['admin.employees.update', $employee->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('CRM.qa_edit')
        </div>

        @include('admin.employees.form')
        
    </div>

    {!! Form::submit(trans('CRM.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

