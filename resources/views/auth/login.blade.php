@extends('layouts.app')

@section('title', 'INGRESO - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
  <div id="wrap">
    <div id="main" class="container">
      <div class="container">
        <div class="row justify-content-around">

          <div class="jumbotron column col-xs-5 col-sm-5 col-md-6 col-lg-4 shadow p-4 mb-4 border {{ 'border-info'}}" style="margin-top: 50px;">

            <center><div>
              <h2><i class="fas fa-sign-in-alt" style="font-size: 1em"></i> INGRESO</h2>
            </div></center>

            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
              @csrf

              <div class="form-group ">
                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Email') }}</label>
                <input type="email" id="email" name="email" placeholder="email@ejemplo.com"
                value="{{ old('email') }}" required autofocus class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
                @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>


              <div class="form-group">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu Contaseña"
                class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>

              <div class="row justify-content-center">
                <div class="checkbox">
                  <label>
                    <input  type="checkbox"  checked id="remember" {{ old('remember') ? 'checked' : '' }}  class="form-check-input" name="remember">{{ __('Recordarme en este equipo') }}
                  </label>
                </div>
              </div>

              <div class="row justify-content-center">
                <input type="submit" class="btn btn-info" value="{{ __('Login') }}">
              </div>

              <br>
              <center><div class="row justify-content-center">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Olvidaste tu contraseña') }} <i class="fas fa-question" style="font-size: 1em"></i></a>
              </div></center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
