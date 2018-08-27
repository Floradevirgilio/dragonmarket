@extends('layouts.app')

@section('title', 'Mis Datos Personales - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
<div id="wrap">
  <div id="main" class="container">
    <div class="container" style="margin-top:100px;">
      <div style= "text-align: center;">
        <h5><strong>INFORMACION DE TU CUENTA</strong></h5>
      </div>
      <div class="row justify-content-between">
        <div class="jumbotron column col-xs-5 col-sm-5 col-md-5 col-lg-5 shadow p-4 mb-4 border {{ $errors->any() ? 'border-danger' : 'border-info' }}" style="margin-top: 50px;">
            {{-- <div class="row justify-content-center"></div> --}}
          <div class="row justify-content-center">
            <h5><strong>Actualizar datos</strong></h5>
          </div>

          <form method="POST"
                action="{{route('actualizarDatosPersonales.update', ['email' => auth()->user()->email])}}"
                enctype="multipart/form-data"> @csrf @method('PATCH')
            <div class="container column col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <label for="first_name"><strong>Nombre</strong></label>
                <input type="text"
                       class="form-control"
                       id="first_name"
                       name="first_name"
                       value="{{ auth()->user()->first_name }}" required autofocus >
                @if ($errors->has('first_name'))
                    <li class="form-control-feedback" style="color: red">Nombre debe tener al menos 4 caracteres</li>
                @endif

                <label for="last_name"><strong>Apellido</strong></label>
                <input type="text"
                       class="form-control"
                       id="last_name"
                       name="last_name"
                       value="{{ auth()->user()->last_name }}" required autofocus >
                @if ($errors->has('last_name'))
                  <li class="form-control-feedback" style="color: red">Apellido debe tener al menos 4 caracteres</li>
                @endif

                <label for="email"><strong>email</strong></label>
                    <input type="email"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           id="email"
                           name="email"
                           value="{{ auth()->user()->email }}" required >
                @if ($errors->has('email'))
                    <li class="form-control-feedback"
                        style="color: red">El email ya existe en nuestra base de datos o su formato es incorrecto</li>
                @endif

                <label for="password"><strong>Contraseña</strong></label>
                  <p style="font-size: .8em">(debe tener al menos seis caracteres)</p>
                <input type="password"
                       class="form-control {{ $errors->has('password') ? ' border border-danger' : '' }}"
                       id="password"
                       name="password"
                       placeholder="contraseña" >
                @if ($errors->has('password'))
                  <li class="form-control-feedback" style="color: red">La contraseña debe tener al menos seis caracteres</li>
                @endif

                <label for="password-confirm"><strong>Confirmá la contraseña</strong></label>
                    <input type="password"
                           class="form-control{{ $errors->has('password-confirm') ? ' is-invalid' : '' }}"
                           id="password-confirm"
                           name="password-confirm"
                           placeholder="confirmá contraseña" >
                @if ($errors->has('password-confirm'))
                  <li class="form-control-feedback" style="color: red">No coincide la contraseña</li>
                @endif
            </div>

            <div style="text-align: center;">
                {{-- Muestra el avatar --}}
                <img width="100px;" src="{{ Storage::url(auth()->user()->avatar) }}">
                <p><label for="avatar">
                  <input type="file" name="avatar">
                </label></p>
                @if ($errors->has('avatar'))
                    <li class="form-control-feedback" style="color: red;">Debe ser una imágen</li>
                @endif
            </div>
            <div style="text-align: center;">
                <a href="/" role="button"
                            class="btn btn-danger"
                            value="Actualizar">Volver</a>
                <input type="submit" class="btn btn-success" value="Actualizar">
            </div>

          </form>
        </div> {{-- cierra jumbotron --}}

        <div style="margin-top: 50px"> {{-- HISTORIAL DE COMPRAS --}}
          <table class="jumbotron table table-striped col-xs-5 col-sm-5 col-md-5 col-lg-5 shadow p-4 mb-4 border border-info">
            <thead>
              <center>
                <tr>
                  <th colspan="4" style="text-align: center;">
                      <h5><strong>Historial de Compras</strong></h5>
                  </th>
                </tr>
              </center>
              {{-- Título de cada columna --}}
              @php $columns = [ '',
                                'Fecha de compra',
                                'Estado',
                                'Total'];
              @endphp
              {{-- Armo la fila de <th> (table head) con los titulos de las columnas --}}
              @foreach ($columns as $column)
                <th>
                  <center> {{ $column }} </center>
                </th>
              @endforeach
            </thead>
            <tbody>
              @if (count($orderHistory) > 0)
                @foreach ($orderHistory as $order)
                  <tr>
                      {{-- id de la venta --}}
                      <td style="text-align: center;">
                          <a href="{{route('orderHistory.show', ['sale_id' => $order->id])}}">
                            <i class="fas fa-search-plus"></i>
                          </a>
                      </td>
                      <td style="text-align: center;"> {{$order->created_at}} </td>
                      <td style="text-align: center;"> {{$order->status}} </td>
                      <td style="text-align: right;">
                          ${{ number_format($order->total, 2, ',', '.') }}
                      </td>
                  </tr>
                @endforeach
              @else
                <tr>
                  <td style="text-align: center;" colspan="4"> {{'No tenés compras realizadas'}} </td>
                </tr>
              @endif
            </tbody>
          </table>
        </div>
        </div> {{-- row content around --}}
      </div> {{-- container --}}
</div>
</div>
@endsection
