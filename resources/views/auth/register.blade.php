@extends('auth.template.index')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#">{{ env("APP_NAME") }}</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Digite seus dados</p>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nome" name="name" value="{{ old('name') ?? '' }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{ old('email') ?? '' }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha" name="password" value="{{ old('password') ?? '' }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Repita a Senha" name="password_confirmation" value="{{ old('password_confirmation') ?? '' }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">

                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                        </div>
                    </div>
                </form>
                <div class="social-auth-links text-center mb-3">
                    <hr>
                    <a href="{{ route('login') }}" class="btn btn-block btn-dark">
                        <i class="fa fa-user-lock mr-2"></i> Já tenho conta!
                    </a>
                    <a href="{{ route('password.request') }}" class="btn btn-block btn-dark">
                        <i class="fa fa-lock mr-2"></i> Recupere sua senha!
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
