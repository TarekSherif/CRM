@if(session()->has("success"))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>@lang('CRM.Success')!</strong> {{session("success")}}.
      </div>
@endif

@if (session()->has("error"))
    
    <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>@lang('CRM.Success')!</strong>  {{session("error")}}.
      </div>
   
@endif
{{-- 
$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
}); --}}
