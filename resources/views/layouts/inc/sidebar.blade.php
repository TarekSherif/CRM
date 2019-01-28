<header class="main-header">
    <!-- Logo -->
    <a  class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"> @lang('CRM.Shortname')</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"> @lang('CRM.Mname')</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    @include('layouts.inc.topbar')

    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('/')}}/Template/AdminLTE/dist/img/user2-160x160.jpg?v=1" class="img-circle" alt="User Image">
                <span class="SLogoBname">
                      
                   </span> 
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                {{Auth::user()->email}}
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
           
            
            <li>
                <a href="{{ route('admin.companies.index') }}">
                    <i class="fa fa-building-o"></i>
                    <span>@lang('CRM.company.title')</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.employees.index') }}">
                    <i class="fa fa-vcard"></i>
                    <span>@lang('CRM.employee.title')</span>
                </a>
            </li>
            
          

          
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>