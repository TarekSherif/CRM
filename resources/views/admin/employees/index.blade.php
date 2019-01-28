@inject('request', 'Illuminate\Http\Request')
@extends('layouts.index')

@section('CoreContent')
    <h3 class="page-title">@lang('CRM.employee.title')</h3>
 
    <p>
        <a href="{{ route('admin.employees.create') }}" class="btn btn-success">@lang('CRM.qa_add_new')</a>
        
    </p>
    

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('CRM.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($employees) > 0 ? 'datatable' : '' }} dt-select ">
                <thead>
                    <tr>
                        
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                      
                        <th>@lang('CRM.employee.fields.f-name')</th>
                        <th>@lang('CRM.employee.fields.l-name')</th>
                        <th>@lang('CRM.employee.fields.email')</th>
                        <th>@lang('CRM.employee.fields.phone')</th>
                        <th>@lang('CRM.employee.fields.cid')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($employees) > 0)
                        @foreach ($employees as $employee)
                            <tr data-entry-id="{{ $employee->id }}">
                                
                                    <td></td>
                           

                                <td field-key='f_name'>{{ $employee->f_name }}</td>
                                <td field-key='l_name'>{{ $employee->l_name }}</td>
                                <td field-key='email'>
                                    <a href="mailto:{{ $employee->email }}">{{ $employee->email }}</a>
                                </td>
                                <td field-key='phone'>{{ $employee->phone }}</td>
                                <td field-key='cid'>{{ $employee->cid->name ?? '' }}</td>
                                                                <td>
                                   
                                    <a href="{{ route('admin.employees.show',[$employee->id]) }}" class="btn btn-xs btn-primary">@lang('CRM.qa_view')</a>
                                    
                                    <a href="{{ route('admin.employees.edit',[$employee->id]) }}" class="btn btn-xs btn-info">@lang('CRM.qa_edit')</a>
                                   
                                    
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("CRM.qa_are_you_sure")."');",
                                        'route' => ['admin.employees.destroy', $employee->id])) !!}
                                    {!! Form::submit(trans('CRM.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                   
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">@lang('CRM.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
 