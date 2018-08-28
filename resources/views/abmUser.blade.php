@extends('layouts.app')

@section('title', 'ABM usuarios - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

<div id="wrap"> {{-- wrap --}}
  <div id="main" class="container"> {{-- main container --}}
    <div class="container" style="margin-top: 75px;"> {{-- container --}}
      <div class="row">
        <div class="col-md-8 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
                <h4>ABM USUARIOS</h4>
            </div>
            <div>
              <h6>Botón Alta Usuarios</h6>
            </div>
            <div class="panel-body">
                <table class="table tabl-striped">
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th style="text-align: left;">email</th>
                    <th style="text-align: center;">Jerarquía</th>
                    <th colspan="2" style="text-align: center;">Acciones</th>
                  </tr>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td style="text-align: left;">{{ $user->email }}</td>
                    <td style="text-align: center;">{{ $user->admin }}</td>
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
                           @if($user['active']=='1')
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
                {!! $users->render() !!}
            </div>
          </div>
        </div>
      </div>
    </div> {{-- end container --}}
  </div> {{-- end main container --}}
</div> {{-- end wrap --}}

@endsection
