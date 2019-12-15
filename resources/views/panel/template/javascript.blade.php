<script src="{{ asset("Auth-Panel/plugins/jquery/jquery.min.js") }}"></script>
<script src="{{ asset("Auth-Panel/plugins/jquery-ui/jquery-ui.min.js") }}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset("Auth-Panel/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("Auth-Panel/plugins/chart.js/Chart.min.js") }}"></script>
<script src="{{ asset("Auth-Panel/plugins/sparklines/sparkline.js") }}"></script>
<script src="{{ asset("Auth-Panel/plugins/jqvmap/jquery.vmap.min.js") }}"></script>
<script src="{{ asset("Auth-Panel/plugins/jqvmap/maps/jquery.vmap.usa.js") }}"></script>
<script src="{{ asset("Auth-Panel/plugins/jquery-knob/jquery.knob.min.js") }}"></script>
<script src="{{ asset("Auth-Panel/plugins/moment/moment.min.js") }}"></script>
<script src="{{ asset("Auth-Panel/plugins/daterangepicker/daterangepicker.js") }}"></script>
<script src="{{ asset("Auth-Panel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}"></script>
<script src="{{ asset("Auth-Panel/plugins/summernote/summernote-bs4.min.js") }}"></script>
<script src="{{ asset("Auth-Panel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
<script src="{{ asset("Auth-Panel/dist/js/adminlte.js") }}"></script>
<script src="{{ asset("Auth-Panel/dist/js/pages/dashboard.js") }}"></script>
<script src="{{ asset("Auth-Panel/dist/js/demo.js") }}"></script>
<script src="{{ asset('Auth-Panel/plugins/toastr/toastr.min.js') }}"></script>
<!--Logout-->
<script>
    function logoutFunction()
    {
        $('#form-logout').submit();
    }
</script>

<script>
    $(function() {
        "use strict";
        @if(session('info'))
        $.toast({
            heading: "Alerta de Informação!",
            text: "{{ session('info') }}",
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'info',
            hideAfter: 3000,
            stack: 6
        });
        @endif

        @if(session('warning'))
        $.toast({
            heading: "Alerta de Atenção!",
            text: "{{ session('warning') }}",
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'warning',
            hideAfter: 3500,
            stack: 6
        });
        @endif

        @if(session('success'))
        $.toast({
            heading: "Alerta de Sucesso!",
            text: "{{ session('success') }}",
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
        @endif

        @if(session('error'))
        $.toast({
            heading: "Alerta de Error",
            text: "{{ session('error') }}",
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'error',
            hideAfter: 3500
        });
        @endif
    });
</script>
