@extends('componentes/layout')

@section('title', '404 - Pagina no encontrada')

@section('content')
  <div class="row justify-content-around">
      <img src="/images/404.png" alt="404">
  </div>

  <br>
  <div class="row justify-content-center">
    <a href="/home">Volver a la página principal</a>
  </div>
@endsection
