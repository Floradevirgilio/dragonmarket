@extends('layouts.app')

@section('title', 'COMPRASTE! - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
  <div class="container">
    <div class="container">
      <center><i class="fas fa-check-circle" style="color:green; font-size:4em; margin-right: 10px; margin-top: 20px"></i><h2>
        <div style="margin-top: 10px; margin-bottom: 30px">
          TU COMPRA ESTÁ SIENDO GESTIONADA</h2>
        </div></center>
        <center>
          <table class="jumbotron table table-striped shadow p-3 mb-5 rounded" border="3">
            <thead>
              <tr>
                @php $columns = [ 'Fecha', 'Producto', 'Cantidad', 'Precio', 'Total']; @endphp {{-- El titulo de cada columna --}}

                @foreach ($columns as $column) {{-- foreacheo una fila de <th> (table head) con los titulos de las columnas --}}
                  <th><center> {{ $column }} </center></th>
                @endforeach
              </tr>
            </thead>
            <tbody>
              @php $total = 0; @endphp
              @foreach ($saleDetail as $detail) {{-- los resultados que me llegaron --}}
                <tr>
                  <td><center>{{$detail['created_at']}}</center></td>
                  <td><center>{{$detail['description']}}</center></td>
                  <td><center>{{$detail['quantity']}}</center></td>
                  <td><center> ${{$detail['price']}} </center></td>
                  <td><center> ${{$detail['price'] * $detail['quantity']}} </center></td>
                </tr>
                @php $total += $detail['price'] * $detail['quantity']; @endphp {{-- le sumo el total de cada producto a $total --}}
              @endforeach
              <tr>
                <td colspan="4" class="text-right"><strong>TOTAL</strong></td>
                <td><center><strong> ${{$total}} </strong></center></td> {{-- $total que acumulo con el foreach --}}
              </tr>
            </tbody>
          </table>
          <a class="btn btn-primary shadow-sm mb-5 rounded" href="/"><i class="fas fa-home" style="font-size: 1em; margin-right: .5em"></i>Volver al home</a>
        </center>
      </div>
    </div>
  @endsection
