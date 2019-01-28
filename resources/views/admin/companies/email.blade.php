{{--  
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>تم اضافة شركة 
           {{$company->name }}
       </title>
   </head>
   <body>
     
    <h3 class="page-title">
          تم اضافة شركة 
        {{$company->name }}
    </h3>

    <div class="panel panel-default">
       

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
        </div>

          
   </body>
   </html>
 --}}
 @component('mail::layout')
 {{-- Header --}}
 @slot('header')
     @component('mail::header', ['url' => config('app.url')])
        @lang('CRM.company.Addcompany')
     @endcomponent
 @endslot
{{-- Body --}}
 
<body>
        <div class="panel panel-default">
            <div class="panel-body table-responsive">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>@lang('CRM.company.fields.name')</th>
                            </tr>
                            <tr>
                                    <td field-key='name'>{{ $company->name }}</td>
                                </tr>
                            <tr>
                                <th>@lang('CRM.company.fields.email')</th>
                            </tr>
                            <tr>
                                    <td field-key='email'>{{ $company->email }}</td>
                            </tr>
                            @if($company->logo)
                            <tr>
                                <th>@lang('CRM.company.fields.logo')</th>
                            </tr>
                            <tr>
                                <td field-key='logo'>
                                    <a href="{{ url("storage/").'/' . $company->logo }}" target="_blank">
                                        <img style="width: 50px;height: 50px;" src="{{ url("storage/").'/'.$company->logo}}"/>
                                    </a>
                                </td>
                             </tr>
                             @endif
                            <tr>
                                <th>@lang('CRM.company.fields.website')</th>
                            </tr>
                            <tr>
                                    <td field-key='website'>{{ $company->website }}</td>
                                </tr>
                        </table>
                    </div>
                </div><!-- Nav tabs -->
            </div>
        </div>
              
       </body>
      
{{-- Footer --}}
 @slot('footer')
     @component('mail::footer')
         © {{ date('Y') }} {{ config('app.name') }}. Super FOOTER!
     @endcomponent
 @endslot
@endcomponent
{{-- 
 @component('mail::message')


 

    <div class="panel panel-default">
       

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
        </div>
    </div>

               
 @endcomponent --}}