@extends('layouts.index')

@section('CoreContent')
    <h3 class="page-title">@lang('CRM.employee.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('CRM.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('CRM.employee.fields.f-name')</th>
                            <td field-key='f_name'>{{ $employee->f_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('CRM.employee.fields.l-name')</th>
                            <td field-key='l_name'>{{ $employee->l_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('CRM.employee.fields.email')</th>
                            <td field-key='email'>{{ $employee->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('CRM.employee.fields.phone')</th>
                            <td field-key='phone'>{{ $employee->phone }}</td>
                        </tr>
                        <tr>
                            <th>@lang('CRM.employee.fields.cid')</th>
                            <td field-key='cid'>{{ $employee->cid->name ?? '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.employees.index') }}" class="btn btn-default">@lang('CRM.qa_back_to_list')</a>
        </div>
    </div>
@stop


