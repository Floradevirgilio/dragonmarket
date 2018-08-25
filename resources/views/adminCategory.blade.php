@extends('layouts.app')

@section('title', 'Editar Categoría - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

  <div id="wrap"> {{-- wrap --}}
    <div id="main" class="container"> {{-- main container --}}
      <div class="container"> {{-- container --}}
        <div class="row justify-content-around">
          <div class="jumbotron column col-xs-12 col-sm-12 col-md-10 col-lg-8 shadow p-4 mb-4 border" style="margin-top: 50px;"> {{-- jumbotron --}}

            <div class="row justify-content-center" style="margin-top: 2em;">
              <h2><h2><i class="fas fa-desktop" style="font-size: 1em; margin-right: .3em"></i>EDITAR CATEGORÍA</h2>
            </div>

            @if ($errors->any())
              <div><center><li style="color:red">{{$errors->first()}}</li></center></div> 
            @endif


            <center>

              <table class="jumbotron table table-striped shadow p-3 mb-5 rounded" border="3">
                <thead>
                  <tr>
                    @php $columnas = [ 'Nombre', 'Editar', 'Eliminar' ]; @endphp {{-- El titulo de cada columna --}}

                    @foreach ($columnas as $columna) {{-- foreacheo una fila de <th> (table head) con los titulos de las columnas --}}
                      <th><center> {{ $columna }} </center></th>
                    @endforeach
                  </tr>
                </thead>
                <tbody>

                  @foreach ($categories as $category) {{-- los resultados que me llegaron --}}
                    <tr>
                      <form action="" method="POST"> @csrf
                        <td>
                        <input type="text" name="name" value="{{ $category['name'] }}" class="form-control column col-xs-6 col-sm-6 col-md-10 col-lg-10">
                        </td>
                        <input type="hidden" name="id" value="{{ $category['id'] }}">
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
         </div>
      </div> {{-- end container --}}
    </div> {{-- end main container --}}
  </div> {{-- end wrap --}}


@endsection
