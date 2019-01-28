@extends('layouts.index')

@section('CoreContent')

   
    <h3 class="page-title">@lang('CRM.company.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('CRM.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('CRM.company.fields.name')</th>
                            <td field-key='name'>{{ $company->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('CRM.company.fields.email')</th>
                            <td field-key='email'>{{ $company->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('CRM.company.fields.logo')</th>
                            <td field-key='logo'>
                                    @if($company->logo)
                                    <a href="{{ url("storage/").'/' . $company->logo }}" target="_blank">
                                        <img style="width: 50px;height: 50px;" src="{{ url("storage/").'/'.$company->logo}}"/>
                                    </a>
                                @endif    
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('CRM.company.fields.website')</th>
                            <td field-key='website'>{{ $company->website }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#employee" aria-controls="employee" role="tab" data-toggle="tab">
        @lang('CRM.employee.title')
</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="employee">
<table class="table table-bordered table-striped {{ count($employees) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('CRM.employee.fields.f-name')</th>
                        <th>@lang('CRM.employee.fields.l-name')</th>
                        <th>@lang('CRM.employee.fields.email')</th>
                        <th>@lang('CRM.employee.fields.phone')</th>
                        
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($employees) > 0)
            @foreach ($employees as $employee)
                <tr data-entry-id="{{ $employee->id }}">
                    <td field-key='f_name'>{{ $employee->f_name }}</td>
                                <td field-key='l_name'>{{ $employee->l_name }}</td>
                                <td field-key='email'>{{ $employee->email }}</td>
                                <td field-key='phone'>{{ $employee->phone }}</td>
                                
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

            <p>&nbsp;</p>

            <a href="{{ route('admin.companies.index') }}" class="btn btn-default">@lang('CRM.qa_back_to_list')</a>
        </div>
    </div>
 



    
@endsection



@section('javascript')

     
@endsection

