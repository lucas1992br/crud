@extends('layouts.layout_login')

@section('content')
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
        <a href="" class="h1">Plusfin</a>
        </div>
        <div class="card-body">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>E-mail ou Senha incorretos</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">
                    <div class="input-group-append">
                        <div class="input-group-text">
                             <span class="fas fa-lock"></span>
                        </div>
                    </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>E-mail ou Senha incorretos</strong>
                    </span>
                @enderror
            </div>
            <div class="row">
            <div class="col-8">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Lembrar-me') }}
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
            </div>
            <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.card -->
    </div>
@endsection
