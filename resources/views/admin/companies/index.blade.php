
@extends('layouts.index')

@section('CoreContent')
      <div id="jtableContainer">
          
      </div>

@endsection

@section('javascript')
  

<script type="text/javascript">
$(function () {

        $('#jtableContainer').jtable({
            title: '<i class="fa @lang("CRM.company.icon")  " style="color: orange;" aria-hidden="true"></i>	 @lang("CRM.company.title")',
            paging: true,
            pageSize: 10,
            sorting: true,
            defaultSorting: 'id DESC',
            columnResizable: true,
            columnSelectable: true,
            saveUserPreferences: true,
            //openChildAsAccordion: true, //Enable this line to show child tabes as accordion style
            actions: {
				listAction:   '{{url("/")}}/admin/ListOfCompanys?_token={{ csrf_token() }}',
                deleteAction: '{{url("/")}}/admin/DeleteCompany?_token={{ csrf_token() }}'
            },
             toolbar: {
                        items: [
                                    {
                                            tooltip: '@lang("CRM.qa_add_new")',
                                            icon: '{{url("/")}}/images/add.png',
                                            text: '@lang("CRM.qa_add_new")',
                                            click: function (e) {
                                                window.location.href = "{{url('/admin/companies/create')}}";
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
                    name: {
						title:'@lang("CRM.company.fields.name")',
						visibility: 'visible',
                       
					},
                    email: {
                        title: '@lang("CRM.company.fields.email")',
                        display:function(data){
                            if(data.record.email)
                            return "<a href='mailto:"+data.record.email+"'>"+data.record.email+"</a>"
                        }
                    },
                    website: {
                        title: '@lang("CRM.company.fields.website")',
                        display:function(data){
                            if(data.record.website)
                            return "<a href='"+data.record.website+"'>"+data.record.website+"</a>"
                        }
                    },
                    logo: {
                        title: '@lang("CRM.company.fields.logo")',
                        display:function(data){
                            if(data.record.logo)
                           return '<a href="{{ url("storage/") ."/"}}'+data.record.logo +'" target="_blank"><img style="width: 50px;height: 50px;" src="{{ url("storage/")."/" }}'+data.record.logo +'" /></a>'
                        }
                    },
                    edit:{
                        width: '1%',
                        display:function(data){
                            return '<button title="تعديل سجل" onclick="edit('+data.record.id+');" class="jtable-command-button jtable-edit-command-button"><span>تعديل سجل</span></button>'
                        }
                    }      ,
                    Show:{
                        width: '1%',
                        display:function(data){
                            return '<button title="عرض سجل" onclick="Show('+data.record.id+');" class="jtable-command-button  fa fa-align-justify"><span>تعديل سجل</span></button>'
                        }
                    }      
                 
            }
           
        });
 
        //Load student list from server
        $('#jtableContainer').jtable('load');

    });
    function edit(id) {
            window.location.href = "{{url('/admin/companies/')}}/"+id+"/edit";
        }
        function Show(id) {
            window.location.href = "{{url('/admin/companies/')}}/"+id;
        }
        
</script>

 
@endsection

