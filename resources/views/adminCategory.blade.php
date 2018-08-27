@extends('layouts.app')

@section('title', 'Editar Categoría - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

<div id="wrap"> {{-- wrap --}}
  <div id="main" class="container"> {{-- main container --}}
    <div class="container"> {{-- container --}}
      <div class="row justify-content-around">
        {{-- jumbotron --}}
        <div class="jumbotron column col-xs-12 col-sm-12 col-md-10 col-lg-8 shadow p-4 mb-4 border"
              style="margin-top: 50px;"> 
          <div class="row justify-content-center">
              <h4>EDITAR CATEGORÍA</h4>
          </div>
          @if ($errors->any())
              <div style="text-align: center;">
                  <li style="color:red">{{$errors->first()}}</li>
              </div>
          @endif
          <div style="text-align: center;">




          {{-- 
          link para ver el tema de Admin (para cualquier tabla !!!
          https://styde.net/paginacion-con-laravel-5/ --}}

          
              <table class="jumbotron table table-striped shadow p-3 mb-5 rounded" border="2">
                <thead>
                    <tr>
                        {{-- Título de cada columna --}}
                        @php $columnas = [ 'Nombre', 
                                           'Editar', 
                                           'Estado' ];
                        @endphp
                        {{-- Completo la fila de <th> (table head) 
                             con los titulos de las columnas --}}
                        @foreach ($columnas as $columna) 
                          <th style="text-align: center;"> {{ $columna }} </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category) {{-- los resultados que me llegaron --}}
                      <tr>
                          <form action="" method="POST"> @csrf
                            <td>
                              <input type="text"
                                     name="name"
                                     value="{{ $category['name'] }}"
                                     class="form-control column col-xs-6 col-sm-6 col-md-10 col-lg-10">
                            </td>
                            <input type="hidden"
                                   name="id"
                                   value="{{ $category['id'] }}">
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
                                  @if($category['active']=='1')
                                    class='btn btn-success'>
                                    <i class="fas fa-check"
                                  @else
                                    class='btn btn-danger'>
                                    <i class="fas fa-times"
                                  @endif
                                  style='font-size: 1.1em'></i>
                               </button>
                            </td>
                          </form>
                      </tr>
                    @endforeach
                </tbody>
              </table>
          </div>
        </div>  {{-- end jumbotron --}}
      </div>
    </div> {{-- end container --}}
  </div> {{-- end main container --}}
</div> {{-- end wrap --}}

@endsection
