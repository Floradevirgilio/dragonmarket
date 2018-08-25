@extends('layouts.app')

@section('title', 'Editar producto - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

  <div id="wrap"> {{-- wrap --}}
    <div id="main" class="container"> {{-- main container --}}
      <div class="container"> {{-- container --}}
        <div class="row justify-content-around"> {{-- row --}}
          <div class="jumbotron column col-xs-10 col-sm-10 col-md-12 col-lg-12 shadow p-4 mb-4 border" style="margin-top: 50px;"> {{-- jumbotron --}}

            <div class="row justify-content-center" style="margin-top: 2em;">
              <h2><h2><i class="fas fa-desktop" style="font-size: 1em; margin-right: .3em"></i>EDITAR PRODUCTO</h2>
            </div>


                        <center>

                          <table class="jumbotron table table-striped shadow p-3 mb-5 rounded" border="3">
                            <thead>
                              <tr>
                                @php $columnas = [ 'Producto', 'Precio', 'Stock', 'Editar', 'Eliminar' ]; @endphp {{-- El titulo de cada columna --}}

                                @foreach ($columnas as $columna) {{-- foreacheo una fila de <th> (table head) con los titulos de las columnas --}}
                                  <th><center> {{ $columna }} </center></th>
                                @endforeach
                              </tr>
                            </thead>
                            <tbody>

                              @foreach ($products as $product) {{-- los resultados que me llegaron --}}
                                <tr>
                                  <form action="" method="POST"> @csrf
                                    <td>
                                    <input type="text" name="description" value="{{ $product['description'] }}" class="form-control column col-xs-6 col-sm-6 col-md-12 col-lg-12">
                                    </td>
                                    <input type="hidden" name="id" value="{{ $product['id'] }}">
                                    <td>
                                    <input type="number" name="price" value="{{ $product['price'] }}" class="form-control column col-xs- col-sm-4 col-md-6 col-lg-6">
                                    </td>
                                    <td>
                                    <input type="number" name="stock" value="{{ $product['stock'] }}" class="form-control column col-xs- col-sm-2 col-md-4 col-lg-4">
                                    </td>
                                    <td>
                                    <center><button type="submit" name="editar" value="editar" class='btn btn-success'><i class="fas fa-edit" style='font-size: 1.1em'></i></button></center>

                                    </td>
                                    <td>
                                    <center><button type="submit" name="borrar" value="editar" class='btn btn-danger'><i class="fas fa-trash-alt" style='font-size: 1.1em'></i></button></center>
                                  </td>
                                  </form>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </center>


           </div>  {{-- end jumbotron --}}
        </div> {{-- end row --}}
      </div> {{-- end container --}}
    </div> {{-- end main container --}}
  </div> {{-- end wrap --}}

@endsection
