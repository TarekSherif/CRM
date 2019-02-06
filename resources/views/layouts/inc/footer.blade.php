<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>@lang('CRM.Version')</b> 1.0
    </div>
    <strong>@lang('CRM.Copyright') &copy; 2019 <a href="mailto:Eng.Tarek.Sherif@gmail.com">Tarek Sherif</a>.</strong>@lang('CRM.ARR').
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">

        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane active" id="control-sidebar-settings-tab">
            
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>



<!-- jQuery 3 -->
<script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/jquery-ui-1.9.2.min.js')}}" type="text/javascript"></script>


<script src="{{url('/')}}/Template/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/Template/AdminLTE/dist/js/adminlte.js"></script>
<script src="{{url('/')}}/js/js.cookie.js"></script>

@if($jtable)

<script src="{{asset('js/datepicker-ar.js')}}"></script>

<script type="text/javascript" src="{{asset('js/jtable/jquery.jtable.js')}}"></script>

@if(session("lang")=="ar")
    <script type="text/javascript" src="{{asset('js/jtable/localization/jquery.jtable.AR.js')}}"></script>
@endif
 

 

@endif

<script type="text/javascript">

    $(function () {

$('#top-search').autocomplete({
     source: '{{url("/")}}/ListOfACEmp?_token={{ csrf_token() }}',
     "position": { my: "center top", at: "center bottom"},
     select: function (e, ui) {
        window.open( "{{url("/")}}/admin/employees/"+ui.item.id, '_self');
     }
 }).data("autocomplete")._renderItem = function (ul, item) {

            return $( "<li></li>" )
                .append(
                  `<a >
                    <div class="row" > 
                            <div class="col-xs-6"> 
                              <strong><i class="fa fa-address-card-o"></i> :</strong>
                        </div>
                        <div class="col-xs-6"> 
                              <strong><i class="fa fa-phone"></i> :</strong>
                        </div>
                        <div class="col-xs-6"> 
                             `+item.label+`
                        </div>
                      <div class="col-xs-6"> 
                             `+item.phone+`
                        </div>
                     
                 
                      </div>
                    </a>       ` )
                .appendTo( ul );
            };
 

      $('[data-toggle="push-menu"]').on('click', function (e) {
          e.preventDefault();
         
          if ($("body").hasClass('sidebar-collapse')) {
              $(".content,.content-header>h1,.main-header>.navbar").removeClass('margin-50');
          } else {
              $(".content,.content-header>h1,.main-header>.navbar").addClass('margin-50');
          }
          
 
          });

   });
         

</script>