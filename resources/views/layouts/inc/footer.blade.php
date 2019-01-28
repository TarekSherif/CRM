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

 
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
 

<script src="{{ url('Template/AdminLTE/js') }}/select2.full.min.js"></script>
<script src="{{ url('Template/AdminLTE/js') }}/main.js"></script>

<script src="{{ url('Template/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ url('Template/AdminLTE/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ url('Template/AdminLTE/js/app.min.js') }}"></script>
 

 
<script>
    window._token = '{{ csrf_token() }}';
</script>
<script>
    $.extend(true, $.fn.dataTable.defaults, {
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/English.json"
        }
    });

    
</script>
<script>
            $(function () {
            $(window).load(function(){
                    $("select[name='DataTables_Table_0_length']").val('10');
            }); 
           
        });

        //   window.deleteButtonTrans = '{{ trans("CRM.qa_delete_selected") }}';
        //   window.copyButtonTrans = '{{ trans("CRM.qa_copy") }}';
        //   window.csvButtonTrans = '{{ trans("CRM.qa_csv") }}';
        //   window.excelButtonTrans = '{{ trans("CRM.qa_excel") }}';
        //   window.pdfButtonTrans = '{{ trans("CRM.qa_pdf") }}';
        //   window.printButtonTrans = '{{ trans("CRM.qa_print") }}';
        //   window.colvisButtonTrans = '{{ trans("CRM.qa_colvis") }}';
      </script>

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