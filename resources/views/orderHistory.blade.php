@extends('layouts.app')

@section('title', 'Historial de compras - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
  <div id="wrap">
    <div id="main" class="container">
      <div class="container" style="margin-top: 100px">
        <div class="row justify-content-around">
          <table class="jumbotron table table-striped shadow p-3 mb-5 rounded" border="3">
            <thead>
              <center>
                <tr>
                  <th colspan="4" style="text-align: center;">DETALLE DE LA COMPRA</th>
                </tr>
              </center>
              {{-- Títulos de las columnas --}}
              @php $columns = [ 'Fecha de Compra',
                                'Producto',
                                'Cantidad',
                                'Precio' ];
              @endphp
              {{-- Armo la fila de <th> (table head) con los titulos de las columnas --}}
              @foreach ($columns as $column)
                  <th style="text-align: center;"> {{ $column }} </th>
              @endforeach
            </thead>
            <tbody>
              @foreach ($orderDetail as $detail)
                  <tr>
                      <td style="text-align: center;"> {{$detail->created_at}} </td>
                      <td style="text-align: left;"> {{$detail->description}} </td>
                      <td style="text-align: right;"> {{$detail->quantity}} </td>
                      <td style="text-align: right;">
                          ${{ number_format($detail->price, 2, ',', '.') }}
                      </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <center>
            <a class="btn btn-primary shadow-sm mb-5 rounded"
                href="{{route('actualizarDatosPersonales.show', ['user_id' => auth()->user()->id])}}">
                <i class="fas fa-primary"></i>Volver
            </a>
        </center>
      </div>
    </div>
  </div>
@endsection
