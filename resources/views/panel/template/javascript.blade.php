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
<!--Logout-->
<script>
    function logoutFunction()
    {
        $('#form-logout').submit();
    }
</script>
