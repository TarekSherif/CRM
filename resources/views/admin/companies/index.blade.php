@inject('request', 'Illuminate\Http\Request')
@extends('layouts.index')

@section('CoreContent')
    <h3 class="page-title">@lang('CRM.company.title')</h3>
   
    <p>
        <a href="{{ route('admin.companies.create') }}" class="btn btn-success">@lang('CRM.qa_add_new')</a>
        
    </p>
   

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('CRM.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($companies) > 0 ? 'datatable' : '' }}   dt-select ">
                <thead>
                    <tr>
                       
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                       

                        <th>@lang('CRM.company.fields.name')</th>
                        <th>@lang('CRM.company.fields.email')</th>
                        <th>@lang('CRM.company.fields.logo')</th>
                        <th>@lang('CRM.company.fields.website')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($companies) > 0)
                        @foreach ($companies as $company)
                            <tr data-entry-id="{{ $company->id }}">
                              
                                    <td></td>
                             

                                <td field-key='name'>{{ $company->name }}</td>
                                <td field-key='email'>
                                    <a href="mailto:{{ $company->email }}">{{ $company->email }}</a>
                                </td>
                                <td field-key='logo'>@if($company->logo)<a href="{{ url("storage/").'/' . $company->logo }}" target="_blank"><img style="width: 50px;height: 50px;" src="{{ url("storage/").'/'.$company->logo}}"/></a>@endif</td>
                                <td field-key='website'>
                                    <a href="http://{{ $company->website }}" target="_blank">{{ $company->website }}</a>
                                </td>
                                                                <td>
                                    
                                    <a href="{{ route('admin.companies.show',[$company->id]) }}" class="btn btn-xs btn-primary">@lang('CRM.qa_view')</a>
                                    
                                    <a href="{{ route('admin.companies.edit',[$company->id]) }}" class="btn btn-xs btn-info">@lang('CRM.qa_edit')</a>
                                    
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("CRM.qa_are_you_sure")."');",
                                        'route' => ['admin.companies.destroy', $company->id])) !!}
                                    {!! Form::submit(trans('CRM.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">@lang('CRM.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

 