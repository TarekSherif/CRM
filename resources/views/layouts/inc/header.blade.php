
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@lang('CRM.Pname') |  @lang("CRM.$view_name") </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
     <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{url('/')}}/images/favicon.png">
        <link rel="apple-touch-icon" href="{{url('/')}}/images/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="{{url('/')}}/images/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="{{url('/')}}/images/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="{{url('/')}}/images/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="{{url('/')}}/images/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="{{url('/')}}/images/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="{{url('/')}}/images/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="{{url('/')}}/images/icon180.png" sizes="180x180">
        <!-- END Icons -->


    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{url('/')}}/Template/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/')}}/Template/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('/')}}/Template/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    
   

 
    @if(session("lang")=="ar" )
        <link rel="stylesheet" href="{{url('/')}}/Template/AdminLTE/dist/css/RTL/AdminLTE.min.css">
        <link rel="stylesheet" href="{{url('/')}}/Template/AdminLTE/dist/css/RTL/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="{{url('/')}}/Template/AdminLTE/dist/css/RTL/rtl.css">
    
    @else
     <link rel="stylesheet" href="{{url('/')}}/Template/AdminLTE/dist/css/AdminLTE.min.css">
    @endif


    <link rel="stylesheet" href="{{url('/')}}/Template/AdminLTE/dist/css/skins/_all-skins.min.css">
    

    

    {{-- <link href="{{ url('Template/AdminLTE/css/custom.css') }}" rel="stylesheet"> --}}

 
    @if($jtable)
       
    <link href="{{asset('js/jtable/themes/metro/purple/jtable.css')}}" rel="stylesheet" type="text/css" />
    
    @endif

    
    
    <link href="{{asset('css/themes/metroblue/jquery-ui.css')}}" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="{{url('/')}}/css/main.css?v=1">
   
    
    
    

  

    
    
    

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">