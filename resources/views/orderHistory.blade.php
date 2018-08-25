@extends('layouts.app')

@section('title', 'Historial de compras - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
  <div id="wrap">
    <div id="main" class="container">
      <div class="container" style="margin-top: 100px">
        <div class="row justify-content-around">
          <table class="jumbotron table table-striped shadow p-3 mb-5 rounded" border="3">
            <thead>
              <center><tr><th colspan="4"><center>
                <i class="fas fa-shopping-basket" style="font-size: 1em; margin-right: .3em"></i>
                Detalle de la compra</center></th></tr></center>
              @php $columns = [ 'Fecha de Compra', 'Producto', 'Cantidad', 'Precio' ]; @endphp {{-- El titulo de cada columna --}}

              @foreach ($columns as $column) {{-- foreacheo una fila de <th> (table head) con los titulos de las columnas --}}
                <th><center> {{ $column }} </center></th>
              @endforeach
            </thead>
            <tbody>
              @foreach ($orderDetail as $detail)
                <tr>
                  <td><center>{{$detail->created_at}}</center></td>  {{-- saco el id de venta del foreach --}}
                  <td><center>{{$detail->description}}</center></td>
                  <td><center>{{$detail->quantity}}</center></td>
                  <td><center>${{$detail->price}}</center></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
