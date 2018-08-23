@extends('layouts.app')

@section('Datos Personales', 'FAQ - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

<div id="wrap">
  <div id="main" class="container">
    <div class="container">
      <div class="row justify-content-center">
        <div class="column col-sm-12 col-md-6" style="margin-top: 50px;">
          <div class="row justify-content-center">
            <h3>Mis Datos Personales</h3>
          </div>

          <div class="form-group">
            <label for="nombre"><strong>Nombre</strong></label>
            <input disabled type="text" class="form-control" id="nombre" name="nombre" value="{{ auth()->user()->first_name }}">
          </div>

          <div class="form-group">
            <label for="apellido"><strong>Apellido</strong></label>
            <input disabled type="text"
            class="form-control" id="apellido" name="apellido" value="{{ auth()->user()->last_name }}">
          </div>

          <div class="form-group">
            <label for="email"><strong>Email</strong></label>
            <input disabled type="text" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
