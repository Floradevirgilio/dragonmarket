@extends('layouts.app')

@section('title', 'ACTUALIZAR MIS DATOS - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
  <div id="wrap">
    <div id="main" class="container">
      <div class="container">
        <div class="row justify-content-around">
          <div class="jumbotron column col-xs-5 col-sm-5 col-md-6 col-lg-6 shadow p-4 mb-4 border {{ $errors->any() ? 'border-danger' : 'border-info' }}" style="margin-top: 50px;">
            <div class="row justify-content-center">

            </div>
            <div class="row justify-content-center" style="margin-top: 2em;">
              <h2><h2><i class="fas fa-user-edit" style="font-size: 1em; margin-right: .3em"></i>ACTUALIZAR DATOS</h2>
            </div>
              <br>
            <form method="POST" action="datosPersonales" enctype="multipart/form-data">
                @csrf
                <div class="container column col-xs-12 col-sm-12 col-md-12 col-lg-12">

                  <label for="first_name"><strong>Nombre</strong></label>
                  <input type="text" class="form-control" id="first_name" name="first_name" value="{{ auth()->user()->first_name }}" required autofocus >
                  @if ($errors->has('first_name'))
                      <li class="form-control-feedback" style="color: red">Nombre debe tener al menos 4 caracteres</li>
                  @endif
                  
                  <br>
                  <label for="last_name"><strong>Apellido</strong></label>
                  <input type="text" class="form-control" id="last_name" name="last_name" value="{{ auth()->user()->last_name }}" required autofocus >
                  @if ($errors->has('last_name'))
                      <li class="form-control-feedback" style="color: red">Apellido debe tener al menos 4 caracteres</li>
                  @endif

                  <br>
                  <label for="email"><strong>Email</strong></label>
                  <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email"
                      value="{{ auth()->user()->email }}" required >
                   @if ($errors->has('mail'))
                      <li class="form-control-feedback" style="color: red">Formato inválido de mail o existente en la base</li>
                  @endif   

                  <br>
                  <label for="password"><strong>Contraseña (debe tener al menos seis caracteres)</strong></label>
                  <input type="password" class="form-control {{ $errors->has('password') ? ' border border-danger' : '' }}" id="password" name="password" placeholder="******" >
                  @if ($errors->has('password'))
                      <li class="form-control-feedback" style="color: red">La contraseña debe tener al menos seis caracteres</li>
                  @endif

                  <br>
                  <label for="password-confirm"><strong>Confirmá la contraseña</strong></label>
                  <input type="password" class="form-control{{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" id="password-confirm" name="password-confirm" placeholder="******" >
                  @if ($errors->has('password-confirm'))
                      <li class="form-control-feedback" style="color: red">No coincide la contraseña</li>
                  @endif
                  <br>
                </div>

                  <center><div>
                      {{-- Cargar avatar --}}
                      <img width="100px;" src="{{ Storage::url(auth()->user()->avatar) }}">

                      <p><label for="avatar">
                          <input type="file" name="avatar">
                      </label></p>
                      @if ($errors->has('avatar'))
                      <li class="form-control-feedback" style="color: red">Debe ser una imágen</li>
                  @endif

                  </div></center>
                  <br>
                  <center><div>
                    <a href="/datosPersonales" role="button" class="btn btn-danger" value="Actualizar">Volver</a>
                    <input type="submit" class="btn btn-success" value="Actualizar">
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
