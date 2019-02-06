
@section('javascript')
  

<script type="text/javascript">
$(function () {

        $('#jtableContainer').jtable({
            title: '<i class="fa  @lang("CRM.employee.icon")" style="color: orange;" aria-hidden="true"></i>	 @lang("CRM.employee.title")',
            paging: true,
            pageSize: 10,
            sorting: true,
            defaultSorting: 'id DESC',
            columnResizable: true,
            columnSelectable: true,
            saveUserPreferences: true,
            //openChildAsAccordion: true, //Enable this line to show child tabes as accordion style
            actions: {
				listAction:   '{{url("/admin/ListOfEmployees/")}}@if(isset($company)){{"/".$company->id}}@endif?_token={{ csrf_token() }}',
                deleteAction: '{{url("/")}}/admin/DeleteEmployee?_token={{ csrf_token() }}'
            },
            toolbar: {
                        items: [
                                    {
                                            tooltip: '@lang("CRM.qa_add_new")',
                                            icon: '{{url("/")}}/images/add.png',
                                            text: '@lang("CRM.qa_add_new")',
                                            click: function (e) {
                                                window.location.href = "{{url('/admin/employees/create')}}";
                                                e.preventDefault();
                                            }
                                        }
                                ]
                    },
            fields: {
                    id:{
                        key:true,
                        list:false
                    },
                    
                    f_name: {
						title:'@lang("CRM.employee.fields.f-name")',
						visibility: 'visible',
                       
					},
                    l_name: {
						title:'@lang("CRM.employee.fields.l-name")',
						visibility: 'visible',
                       
					},
                    email: {
                        title: '@lang("CRM.employee.fields.email")',
                        display:function(data){
                            if(data.record.email)
                            return "<a href='mailto:"+data.record.email+"'>"+data.record.email+"</a>"
                        }
                    },
                    phone: {
                        title: '@lang("CRM.employee.fields.phone")',
                    },
                
                    Cname   : {
                        title: '@lang("CRM.employee.fields.cid")',
                    },    
                    edit:{
                        width: '1%',
                        display:function(data){
                            return '<button title="تعديل سجل" onclick="edit('+data.record.id+');"  class="jtable-command-button jtable-edit-command-button"><span>تعديل سجل</span></button>'
                        }
                    }     ,
                    Show:{
                        width: '1%',
                        display:function(data){
                            return '<button title="عرض سجل" onclick="Show('+data.record.id+');" class="jtable-command-button fa fa-align-justify"><span>تعديل سجل</span></button>'
                        }
                    }              
                   
            }
           
        });
 
        //Load student list from server
        $('#jtableContainer').jtable('load');
 
    });
 

       function edit(id) {
            window.location.href = "{{url('/admin/employees/')}}/"+id+"/edit";
        }
        function Show(id) {
            window.location.href = "{{url('/admin/employees/')}}/"+id;
        }
</script>

 
@endsection

