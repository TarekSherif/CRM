@extends('layouts.index')

@section('CoreContent')
    <h3 class="page-title">@lang('CRM.company.title')</h3>
    
    {!! Form::model($company, ['method' => 'PUT', 'route' => ['admin.companies.update', $company->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('CRM.qa_edit')
        </div>

        @include('admin.companies.form')
        
    </div>

    {!! Form::submit(trans('CRM.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

