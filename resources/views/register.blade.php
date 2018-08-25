@extends('layouts.app')

@section('title', 'REGISTRO - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
  <div id="wrap">
    <div id="main" class="container">
      <div class="container">
        <div class="row justify-content-around">
          <div class="jumbotron column col-xs-5 col-sm-5 col-md-6 col-lg-6 shadow p-4 mb-4 border {{ $errors->any() ? 'border-danger' : 'border-info' }}" style="margin-top: 50px;">
            <div class="row justify-content-center">

            </div>
            <div class="row justify-content-center" style="margin-top: 2em;">
              <h2><h2><i class="fas fa-user-edit" style="font-size: 1em; margin-right: .3em"></i>REGISTRO</h2>
            </div>

            <form method="POST" action="register" aria-label="Register" enctype="multipart/form-data">
                @csrf
              <div class="container column col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <label for="first_name"><strong>Nombre</strong></label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required autofocus placeholder="Nombre">
                @if ($errors->has('first_name'))
                    <li class="form-control-feedback" style="color: red">Nombre debe tener al menos cuatro caracteres</li>
                @endif

                <br>
                <label for="last_name"><strong>Apellido</strong></label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required autofocus placeholder="Apellido">
                @if ($errors->has('last_name'))
                    <li class="form-control-feedback" style="color: red">Apellido debe tener al menos cuatro caracteres<</li>
                @endif

                <br>
                <label for="email"><strong>Email</strong></label>
                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email"
                    value="{{ old('email') }}" required placeholder="Email">
                @if ($errors->has('email'))
                    <li class="form-control-feedback" style="color: red">El email ya existe en nuestra base de datos o su formato es incorrecto</li>
                @endif

                <br>
                <label for="email-confirm"><strong>Confirmá email</strong></label>
                <input type="email" class="form-control{{ $errors->has('email-confirm') ? ' is-invalid' : '' }}" id="email-confirm" name="email-confirm"
                    value="" required placeholder="Reingresa tu email">
                    @if ($errors->has('email-confirm'))
                        <li class="form-control-feedback" style="color: red">El email no coincide</li>
                    @endif

                <br>
                <label for="password"><strong>Contraseña (debe tener al menos seis caracteres)</strong></label>
                <input type="password" class="form-control {{ $errors->has('password') ? ' border border-danger' : '' }}" id="password" name="password" placeholder="******" required>
                @if ($errors->has('password'))
                <li class="form-control-feedback" style="color: red">La contraseña debe tener al menos seis caracteres</li>
            @endif

                <br>
                <label for="password-confirm"><strong>Confirmá la contraseña</strong></label>
                <input type="password" class="form-control{{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" id="password-confirm" name="password-confirm" placeholder="******" required>
                @if ($errors->has('password-confirm'))
                    <li class="form-control-feedback" style="color: red">La contraseña debe coincidir</li>
                @endif

                <br>
              </div>

              <br>
              <div>
                  {{-- Cargar avatar --}}
                  <p><label for="avatar">
                      <input type="file" name="avatar">
                  </label></p>

                  {{--
                    @if ($errors->has('avatar'))
                      $avatar = "/storage/users/default.jpg";
                    @endif
                  --}}

              </div>

              <div class="form-group">
                <div class="row justify-content-center">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="chk-terminos" name="terminos"
                             class=" {{ $errors->has('terminos') ? 'border border-danger' : '' }}" required>
                      <strong>Acepto los términos y condiciones</strong>
                    </label>
                  </div>
                </div>
              </div>

              <center><div>
                <input type="submit" class="btn btn-info" value="Crear cuenta">
              </div></center>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
@endsection
