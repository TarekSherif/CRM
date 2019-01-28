 
@include('layouts.inc.header')
@include('layouts.inc.sidebar')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

 
    <!-- Main content -->
    <section class="content">
        @include('layouts.inc.meassage')

        @yield('CoreContent')
        
        @if($jtable)
            <div class="white-Background">
                    <div id="jtableContainer" class="@lang("messages.Clang")"></div>
            </div>
        @endif
    </section>
</div>


    @include('layouts.inc.footer' ) @yield('javascript')




</body>

</html>