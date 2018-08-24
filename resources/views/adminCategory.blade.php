@extends('layouts.app')

@section('title', 'Editar Categoría - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

  <div id="wrap"> {{-- wrap --}}
    <div id="main" class="container"> {{-- main container --}}
      <div class="container"> {{-- container --}}
        <div class="row justify-content-around"> {{-- row --}}
          <div class="jumbotron column col-xs-12 col-sm-12 col-md-10 col-lg-8 shadow p-4 mb-4 border {{ $errors->any() ? 'border-danger' : 'border-info' }}" style="margin-top: 50px;"> {{-- jumbotron --}}

            <div class="row justify-content-center" style="margin-top: 2em;">
              <h2><h2><i class="fas fa-desktop" style="font-size: 1em; margin-right: .3em"></i>EDITAR CATEGORÍA</h2>
            </div>


              <div class="container column col-xs-12 col-sm-12 col-md-12 col-lg-12">

                 {{-- {!! Form::open(array('action' => 'ProductController@update', 'class' =>'container column col-xs-12 col-sm-12 col-md-12 col-lg-12', 'method' => 'put')) !!} --}}
                  {!! Form::open(['url' => '/adminCategory', 'method' => 'put'], ['class' =>'container column col-xs-12 col-sm-12 col-md-12 col-lg-12']) !!}
                    @csrf
                  <br>

                  <strong>{!!  Form::label('name', 'Nombre:') !!}</strong>
                  <br>
                  {!! Form::select('name',$categories,null,['placeholder' => 'Seleccioná la categoría','id'=>'category', 'class' => 'form-control column col-xs-10 col-sm-10 col-md-12 col-lg-12']) !!}
                  <br>
                  {!!  Form::hidden('active', '0') !!}

              </div>

              {{-- Para editar tiene que traerlo, poderlo cambiar, y el hidden tiene que mantenerse en "1" --}}

              <center><div> {!! Form::submit('Eliminar', ['class'=> 'btn btn-info']); !!} {!! Form::submit('Guardar', ['class'=> 'btn btn-info']); !!}</div></center>
              {!! Form::close() !!}

           </div>  {{-- end jumbotron --}}
        </div> {{-- end row --}}
      </div> {{-- end container --}}
    </div> {{-- end main container --}}
  </div> {{-- end wrap --}}


@endsection
