<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="{{ asset("Auth-Panel") }}/#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">Informações de Usuário</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 2 novas mensagens
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 1 Requisição
                    <span class="float-right text-muted text-sm">12 horas</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 novos alertas
                    <span class="float-right text-muted text-sm">2 dias</span>
                </a>
                <div class="dropdown-divider"></div>
                <div class="card-footer row">
                    <div class="text-left col-6">
                        <a href="#" class="btn  btn-sm btn-primary btn-customize"><i class="fa fa-user-circle"></i> | Perfil</a>
                    </div>
                    <div class="text-right col-6">
                        <a href="{{ route("logout") }}" class="btn btn-sm btn-danger btn-customize" onclick="event.preventDefault();logoutFunction();"><i class="fa fa-door-closed"></i> | Encerrar</a>
                        <form id="form-logout" method="post" action="{{ route("logout") }}" style="display: none;">{{ csrf_field() }}</form>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>
