@extends('layouts.app')

@section('title', 'ABM Productos - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

<div id="wrap"> {{-- wrap --}}
  <div id="main" class="container"> {{-- main container --}}
    <div class="container" style="margin-top: 75px;"> {{-- container --}}
      <div class="row">
        <div class="col-md-8 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
                <h4>ABM PRODUCTOS</h4>
            </div>
            <div>
              <h6>Botón Alta Producto</h6>
            </div>
            <div class="panel-body">
                <table class="table tabl-striped">
                  <tr>
                    <th>#</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                  </tr>
                  @foreach ($products as $product)
                  <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Activo</a>
                    </td>
                  </tr>
                  @endforeach
                </table>
                {!! $products->render() !!}
            </div>
          </div>
        </div>
      </div>
    </div> {{-- end container --}}
  </div> {{-- end main container --}}
</div> {{-- end wrap --}}

@endsection
