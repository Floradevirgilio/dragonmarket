@extends('layouts.app')

@section('title', 'Nuevo producto - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

  <div id="wrap"> {{-- wrap --}}
    <div id="main" class="container"> {{-- main container --}}
      <div class="container"> {{-- container --}}
        <div class="row justify-content-around"> {{-- row --}}
          <div class="jumbotron column col-xs-12 col-sm-12 col-md-10 col-lg-8 shadow p-4 mb-4 border {{ $errors->any() ? 'border-danger' : 'border-info' }}" style="margin-top: 50px;"> {{-- jumbotron --}}

            <div class="row justify-content-center" style="margin-top: 2em;">
              <h2><h2><i class="fas fa-desktop" style="font-size: 1em; margin-right: .3em"></i>NUEVO PRODUCTO</h2>
            </div>

  
              <div class="container column col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 {{--Form::model($user, ['route' => ['user.update', $user->id]])--}}
                 {{-- Form::open(array(['action' => ['ProductController@update', /* $user->id */'file' => true]], 'method' => 'post') --}}
                {{ Form::open(['url' => '/adminNewProduct', 'method' => 'post'], ['class' =>'container column col-xs-12 col-sm-12 col-md-12 col-lg-12']) }}
                    @csrf
                  <br>

                  <strong>{!!  Form::label('category', 'Categoría:') !!}</strong>
                  <br>
                    {!! Form::select('category_id',$categories,null,['placeholder' => 'Seleccioná la categoría','id'=>'category', 'class' => 'form-control column col-xs-10 col-sm-10 col-md-12 col-lg-12']) !!}
                  <br>

                  <strong>{!!  Form::label('product', 'Producto:') !!}</strong>
                  <br>
                    {!! Form::text('description', null,['class' => 'form-control column col-xs-10 col-sm-10 col-md-12 col-lg-12','required placeholder'=>'Descripción del producto.']) !!}
                  <br>

              {{--  Esto viene si es crear un producto nuevo  --}}
               <strong>{!!  Form::label('image', 'Imagen:') !!}</strong>
                <br>
                  {!! Form::file('image'); !!}
              {{--  ---> poner la carga de fotografía --}}
                <br>
                  <br>


                <strong>{!!  Form::label('price', 'Precio:') !!}</strong>
                {!! Form::number('price', null, ['class' => 'form-control column col-xs- col-sm-2 col-md-3 col-lg-3', 'required placeholder' => '0,00', 'step' => '0.1']) !!}
                  {{--  Esto viene si es crear un producto nuevo  EN LAS VALIDACIONES --> required|between:0,99.99
                {!! Form::number('number', null, ['class' => 'form-control column col-xs- col-sm-1 col-md-2 col-lg-2', 'required placeholder' => '0.00']) !!} --}}
                <br>
                <strong>{!!  Form::label('stock', 'En stock:') !!}</strong>
                  {{--  Esto viene si es crear un producto nuevo --}}
                 {!! Form::number('stock', null, ['class' => 'form-control column col-xs- col-sm-1 col-md-2 col-lg-2', 'required placeholder' => 1]) !!}
                 {!!  Form::hidden('active', '1') !!}
              </div>
              <br>
              <center><div> {!! Form::submit('Enviar', ['class'=> 'btn btn-info']); !!}</div></center>
              {!! Form::close() !!}

           </div>  {{-- end jumbotron --}}
        </div> {{-- end row --}}
      </div> {{-- end container --}}
    </div> {{-- end main container --}}
  </div> {{-- end wrap --}}


@endsection
