@extends('layouts.app')

@section('title', 'Nueva Categoría - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

  <div id="wrap"> {{-- wrap --}}
    <div id="main" class="container"> {{-- main container --}}
      <div class="container"> {{-- container --}}
        <div class="row justify-content-around"> {{-- row --}}
          <div class="jumbotron column col-xs-12 col-sm-12 col-md-10 col-lg-8 shadow p-4 mb-4 border {{ $errors->any() ? 'border-danger' : 'border-info' }}" style="margin-top: 50px;"> {{-- jumbotron --}}

            <div class="row justify-content-center" style="margin-top: 2em;">
              <h2><h2><i class="fas fa-desktop" style="font-size: 1em; margin-right: .3em"></i>NUEVA CATEGORÍA</h2>
            </div>

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                Hay problemas con los datos ingresados.<br />
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

              <div class="container column col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 {{--Form::model($user, ['route' => ['user.update', $user->id]])--}}
                 {{-- Form::open(array(['action' => ['ProductController@update', /* $user->id */'file' => true]], 'method' => 'post') --}}
                {{ Form::open(['url' => '/adminNewCategory', 'method' => 'post'], ['class' =>'container column col-xs-12 col-sm-12 col-md-12 col-lg-12']) }}
                    @csrf
                  <br>

                  <strong>{!!  Form::label('name', 'Nombre:') !!}</strong>
                  <br>
                  {!! Form::text('name', null,['class' => 'form-control column col-xs-10 col-sm-10 col-md-12 col-lg-12' . ($errors->has('name') ? ' is-invalid' : ''),'required placeholder'=>'Nombre de la categoría.']) !!}
                  <br>
                  {!!  Form::hidden('active', '1') !!}
              </div>

              <center><div> {!! Form::submit('Enviar', ['class'=> 'btn btn-info']); !!}</div></center>
              {!! Form::close() !!}

           </div>  {{-- end jumbotron --}}
        </div> {{-- end row --}}
      </div> {{-- end container --}}
    </div> {{-- end main container --}}
  </div> {{-- end wrap --}}


@endsection
