@extends('layouts.app')

@section('title', 'COMPRASTE! - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
  <div id="wrap">
    <div id="main" class="container">
      <div class="container" style="margin-top: 100px">
        <div style="margin-top: 10px; margin-bottom: 30px">
          <h4>TU COMPRA ESTÁ SIENDO GESTIONADA</h4>
          <h4><i class="fas fa-check-circle" style="color:green;"></i></h4>
        </div>
        <center>
            <table class="jumbotron table table-striped shadow p-3 mb-5 rounded" border="3">
                <thead>
                  <tr>
                    {{-- Títulos de las columnas --}}
                    @php $columns = [ 'Fecha',
                                      'Producto',
                                      'Cantidad',
                                      'Precio',
                                      'Total'];
                    @endphp
                    {{-- Armo la fila de <th> (table head) con los títulos de las columnas --}}
                    @foreach ($columns as $column)
                        <th style="text-align: center;"> {{ $column }} </th>
                    @endforeach
                  </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp

                    {{-- Recorro el array y muestro los valores --}}
                    @foreach ($saleDetail as $detail)
                        <tr>
                            <td style="text-align: center;">{{$detail['created_at']}}</td>
                            <td style="text-align: left;">{{$detail['description']}}</td>
                            <td style="text-align: right;">{{$detail['quantity']}}</td>
                            <td style="text-align: right;"> ${{$detail['price']}} </td>
                            <td style="text-align: right;">
                                ${{ number_format(($detail['price'] * $detail['quantity']), 2, ',', '.') }}
                            </td>
                        </tr>
                        {{-- le sumo el total de cada producto a $total --}}
                         @php $total += $detail['price'] * $detail['quantity']; @endphp
                    @endforeach
                    <tr>
                        <td colspan="4" class="text-right"><strong>TOTAL</strong></td>
                        {{-- $total que acumulo recorriendo el foreach --}}
                        <td style="text-align: center;">
                            <strong> ${{ number_format(($total), 2, ',', '.') }} </strong>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-primary shadow-sm mb-5 rounded" href="/">
                <i class="fas fa-home" style="font-size: 1em; margin-right: .5em"></i>Volver al home</a>
        </center>
      </div>
    </div>
  </div>
@endsection
