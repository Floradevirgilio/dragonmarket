@extends('layouts.app')

@section('title', 'REGISTRO - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
<div id="wrap">
  <div id="main" class="container">
    <div class="container">
      <div class="row justify-content-around">
        <div class="jumbotron column col-xs-5 col-sm-5 col-md-6 col-lg-6 shadow p-4 mb-4 border
                  {{ $errors->any() ? 'border-danger' : 'border-info' }}"
             style="margin-top: 100px;">
          <div class="row justify-content-center">
              <h4>REGISTRO</h4>
          </div>
          <form method="POST"
                action="register"
                aria-label="Register"
                enctype="multipart/form-data">
              @csrf
            <div class="container column col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <label for="first_name">Nombre</label>
              <input type="text"
                     class="form-control"
                     id="first_name"
                     name="first_name"
                     value="{{ old('first_name') }}" required autofocus
                     placeholder="Nombre">
                @if ($errors->has('first_name'))
                    <li class="form-control-feedback"
                        style="color: red">Nombre debe tener al menos cuatro caracteres
                    </li>
                @endif

              <br>
              <label for="last_name">Apellido</label>
              <input type="text"
                     class="form-control"
                     id="last_name"
                     name="last_name"
                     value="{{ old('last_name') }}" required autofocus
                     placeholder="Apellido">
                @if ($errors->has('last_name'))
                    <li class="form-control-feedback"
                        style="color: red">Apellido debe tener al menos cuatro caracteres
                    </li>
                @endif

              <br>
              <label for="email">email</label>
              <input type="email"
                     class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                     id="email"
                     name="email"
                     value="{{ old('email') }}" required
                     placeholder="email">
                @if ($errors->has('email'))
                    <li class="form-control-feedback"
                        style="color: red">El email ya existe en nuestra base de datos o su formato es incorrecto
                    </li>
                @endif

              <br>
              <label for="email-confirm">Confirmá email</label>
              <input type="email"
                     class="form-control{{ $errors->has('email-confirm') ? ' is-invalid' : '' }}"
                     id="email-confirm"
                     name="email-confirm"
                     value="" required
                     placeholder="Reingresá tu email">
                  @if ($errors->has('email-confirm'))
                      <li class="form-control-feedback"
                          style="color: red">El email no coincide
                      </li>
                  @endif

              <br>
              <label for="password">Contraseña (mínimo seis caracteres)</label>
              <input type="password"
                     class="form-control {{ $errors->has('password') ? ' border border-danger' : '' }}"
                     id="password"
                     name="password"
                     placeholder="contraseña" required>
                @if ($errors->has('password'))
                  <li class="form-control-feedback"
                      style="color: red">La contraseña debe tener al menos seis caracteres
                  </li>
                @endif

              <br>
              <label for="password-confirm">Confirmá la contraseña</label>
              <input type="password"
                     class="form-control{{ $errors->has('password-confirm') ? ' is-invalid' : '' }}"
                     id="password-confirm"
                     name="password-confirm"
                     placeholder="Reingresá contraseña" required>
                @if ($errors->has('password-confirm'))
                    <li class="form-control-feedback"
                        style="color: red">No coincide la contraseña
                    </li>
                @endif

              <br>
              <div style="text-align: center;">
                  {{-- Cargar avatar --}}
                  <label for="avatar">
                      <input type="file" name="avatar">
                  </label>
              </div>

              <br>
              <div class="form-group">
                <div class="row justify-content-center">
                  <div class="checkbox">
                    <label>
                        <input type="checkbox"
                               id="chk-terminos"
                               name="terminos"
                               class=" {{ $errors->has('terminos') ? 'border border-danger' : '' }}" required>
                        <strong>Acepto los términos y condiciones</strong>
                    </label>
                  </div>
                </div>
              </div>

              <br>
              <div style="text-align: center;">
                  <input type="submit"
                         class="btn btn-info"
                         value="Crear cuenta">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
