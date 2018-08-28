@extends('layouts.app')

@section('title', 'Editar Categoría - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

<div id="wrap"> {{-- wrap --}}
  <div id="main" class="container"> {{-- main container --}}
    <div class="container" style="margin-top: 75px;"> {{-- container --}}
      <div class="row">
        <div class="col-md-6 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Categorías</h4>
            </div>
            <div>
              <h6>Botón Alta Categoría</h6>
            </div>
            <div class="panel-body">
                <table class="table tabl-striped">
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                  </tr>
                  @foreach ($categories as $category)
                  <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Activo</a>
                    </td>
                  </tr>
                  @endforeach
                </table>
                {!! $categories->render() !!}
            </div>
          </div>
        </div>
      </div>
    </div> {{-- end container --}}
  </div> {{-- end main container --}}
</div> {{-- end wrap --}}

@endsection
