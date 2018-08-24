@extends('layouts.app')

@section('Datos Personales', 'FAQ - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

  <div id="wrap">
    <div id="main" class="container">
      <div class="container">
        <div class="row justify-content-around">
          <div class=" jumbotron column col-xs-5 col-sm-8 col-md-8 col-lg-6 shadow p-4 mb-4 border {{ $errors->any() ? 'border-danger' : 'border-info' }}" style="margin-top: 50px;">
            <div class="row justify-content-center">
              <h2>Mis Datos Personales</h2>
            </div>
              <br>
            <div class="form-group">
              <label for="nombre"><strong>Nombre</strong></label>
              <input disabled type="text"
              class="form-control"
              id="nombre"
              name="nombre"
              value="{{ auth()->user()->first_name }}">
            </div>

            <div class="form-group">
              <label for="apellido"><strong>Apellido</strong></label>
              <input disabled type="text"
              class="form-control"
              id="apellido"
              name="apellido"
              value="{{ auth()->user()->last_name }}">
            </div>

            <div class="form-group">
              <label for="email"><strong>Email</strong></label>
              <input disabled type="text"
              class="form-control"
              id="email"
              name="email"
              value="{{ auth()->user()->email }}">
            </div>

            <div class="form-group">
              <label for="password"><strong>Password</strong></label>
              <input disabled type="text"
              class="form-control"
              id="password"
              name="password"
              value="******">
            </div>

            <img width="100px;" src="{{ Storage::url(auth()->user()->avatar) }}">

            <div class="row justify-content-center">
              <a href="/actualizarDatosPersonales" role="button" class="btn btn-info" value="Actualizar">Editar</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
