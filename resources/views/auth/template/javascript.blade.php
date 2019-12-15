<script src="{{ asset("Auth-Panel/plugins/jquery/jquery.min.js") }}"></script>
<script src="{{ asset("Auth-Panel/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("Auth-Panel/dist/js/adminlte.min.js") }}"></script>
<script src="{{ asset('Auth-Panel/plugins/toastr/toastr.min.js') }}"></script>
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
