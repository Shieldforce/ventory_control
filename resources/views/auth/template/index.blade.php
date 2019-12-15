<!DOCTYPE html>
<html lang="pt-BR">
    @includeIf("auth.template.head")
    <body class="hold-transition login-page" style="background-image: url({{ asset("Auth-Panel/dist/img/background_login.png") }});">
        @yield("content")
        @includeIf("auth.template.javascript")
    </body>
</html>

