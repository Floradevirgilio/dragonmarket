@extends('layouts.app')

@section('title', 'REGISTRO - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
{{-- @php
  $errores = [];

  if ($_POST) {
    $errores = $validator->validarRegistro($_POST, $db);

    if (empty($errores)) {
      $avatar = $_POST["email"].  '.'. pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
      $usuario = new Usuario(null,
                             $_POST['nombre'],
                             $_POST['apellido'],
                             $_POST['email'],
                             $_POST['pass'],
                             null,
                             '1');              // creo mi nueva instancia de usuario
      $usuario = $db->guardarUsuario($usuario); // guarda el user en la db

      $user = $db->buscamePorEmail($_POST['email']);
      $id = $user->getId(); // obtengo el id, para guardar el avatar,
                                 // que lleva por nombre 'id'.jpg
      $db->guardarAvatar($id); // Guardo el avatar

      $auth->login($id); // Inicio $_SESSION

      header('Location: home.php');
      exit;
    }
  }

@endphp --}}


  <div id="wrap">
    <div id="main" class="container">
      <div class="container">
        <div class="row justify-content-around">
          <div class="jumbotron column col-xs-5 col-sm-5 col-md-6 col-lg-6 shadow p-4 mb-4 border " style="margin-top: 50px;">
            <div class="row justify-content-center">

            </div>
            <div class="row justify-content-center" style="margin-top: 2em;">
              <h2><h2><i class="fas fa-user-edit" style="font-size: 1em; margin-right: .3em"></i>REGISTRO</h2>
            </div>

            <form "POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
              <div class="container column col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <label for="first_name"><strong>{{ __('Nombre (*)') }}</strong></label>
                <input type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" id="first_name" name="first_name"
                value="{{ old('first_name') }}" required autofocus placeholder="Nombre">
                @if ($errors->has('first_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif

                <br>
                <label for="last_name"><strong>{{ __('Apellido (*)') }}</strong></label>
                <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" id="last_name" name="last_name"
                value="{{ old('last_name') }}" required autofocus placeholder="Apellido">
                    @if ($errors->has('last_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif

                <br>
                <label for="email"><strong>{{ __('e-mail (*)') }}</strong></label>
                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email"
                    value="{{ old('email') }}" required placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                <br>
                <label for="email-confirm"><strong>{{ __('Confirmá email (*)') }}</strong></label>
                <input type="email" class="form-control{{ $errors->has('email-confirm') ? ' is-invalid' : '' }}" id="email-confirm" name="email-confirm"
                    value="" required placeholder="Reingresa tu email">
                    @if ($errors->has('email-confirm'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email-confirm') }}</strong>
                        </span>
                    @endif

                <br>
                <label for="pass"><strong>{{ __('Contraseña (* mínimo 6 caracteres)') }}</strong></label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
                    @if ($errors->has('pass'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('pass') }}</strong>
                        </span>
                    @endif

                <br>
                <label for="pass-confirm"><strong>{{ __('Confirmá la contraseña (*)') }}</strong></label>
                <input type="password" class="form-control{{ $errors->has('pass-confirm') ? ' is-invalid' : '' }}" id="pass-confirm" name="pass-confirm" placeholder="Confirmá contraseña" required>
                    @if ($errors->has('pass-confirm'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('pass-confirm') }}</strong>
                        </span>
                    @endif

                <br>
                <label><strong>{{ __('Ingresá tu foto o avatar (*)') }}</strong></label>
                <div class="row col-md-6">
                  <input type="file" name="avatar"  class="{{ $errors->has('avatar') ? ' is-invalid' : '' }}"/ required>
                </div>

              </div>
              <br>
              <div class="form-group">
                <div class="row justify-content-center">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="chk-terminos" name="terminos"
                             class=" {{ $errors->has('terminos') ? 'border border-danger' : '' }}">
                      <strong>{{ __(' Acepto los términos y condiciones ') }}</strong>
                    </label>
                  </div>
                </div>
              </div>

              <div class="row justify-content-center">
                <input type="submit" class="btn btn-info" value="{{ __('Crear cuenta') }}">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
@endsection
