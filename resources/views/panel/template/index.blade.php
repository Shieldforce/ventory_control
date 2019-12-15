<!DOCTYPE html>
<html lang="pt-BR">
    @includeIf("$route[0].template.head")
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @includeIf("$route[0].template.navbar")
            @includeIf("$route[0].template.aside")
            @yield("content")
            @includeIf("$route[0].template.footer")
        </div>
        @includeIf("$route[0].template.javascript")
    </body>
</html>

