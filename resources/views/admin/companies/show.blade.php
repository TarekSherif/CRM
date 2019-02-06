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

    <div id="jtableContainer">
          
    </div>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.companies.index') }}" class="btn btn-default">@lang('CRM.qa_back_to_list')</a>
        </div>
    </div>
 



    
@endsection


@include('admin.employees.Table')

