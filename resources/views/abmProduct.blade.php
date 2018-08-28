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
                    <th style="text-align: center;">Precio</th>
                    <th colspan="2" style="text-align: center;">Acciones</th>
                  </tr>
                  @foreach ($products as $product)
                  <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->description }}</td>
                    <td style="text-align: right;">${{ number_format(($product->price), 2, ',', '.') }}</td>
                    <td style="text-align: center;">
                        <button type="submit"
                                name="editar"
                                value="editar"
                                class='btn btn-primary'>
                            <i class="fas fa-edit"
                               style='font-size: 1.1em'></i>
                         </button>
                    </td>
                    <td style="text-align: center;">
                        <button type="submit"
                                name="activo"
                                value="activo"
                           @if($product['active']=='1')
                             class='btn btn-success'>
                             <i class="fas fa-check"
                           @else
                             class='btn btn-danger'>
                             <i class="fas fa-times"
                           @endif
                           style='font-size: 1.1em'></i>
                        </button>
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
