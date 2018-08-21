@extends('layouts.app')

@section('title', 'Productos - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

  <div id="wrap"> {{-- wrap --}}
    <div id="main" class="container"> {{-- main container --}}
      <div class="container"> {{-- container --}}
        <div class="row justify-content-around"> {{-- row --}}
          <div class="jumbotron column col-xs-5 col-sm-5 col-md-6 col-lg-6 shadow p-4 mb-4 border {{ $errors->any() ? 'border-danger' : 'border-info' }}" style="margin-top: 50px;"> {{-- jumbotron --}}

            <div class="row justify-content-center" style="margin-top: 2em;">
              <h2><h2><i class="fas fa-desktop" style="font-size: 1em; margin-right: .3em"></i>PRODUCTO</h2>
            </div>

            <form method="POST" action="/product" aria-label="NewProduct" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf
              <div class="container column col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <br>
                  <p><strong>Categoría:</strong>
                    <select id="categories" name="categories" class="form-control">
                    </select>
                  </p>
                 <br>
                  <p><strong>Producto:</strong>
                  <select id="product" name="product" class="form-control">
                  </select>
                 </p>
                <br>
                {{--$table->increments('id');
                $table->string('image', 50); // hasta 50 caracteres
                $table->string('description', 75); // hasta 75 caracteres
                $table->integer('category_id')->unsigned(); // en la clave foranea tiene que ir un unsigned para que no se rompa
                $table->foreign('category_id')->references('id')->on('categories'); // establezco la relacion de la clave foreanea
                $table->decimal('price', 8, 2); // 8 enteros, 2 decimales
                $table->tinyInteger('stock')->default(1);
                $table->tinyInteger('active')->default(1);--}}
                <label for="description"><strong>Descripción:</strong></label>
                <input type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" name="description"
                    value="{{ old('description') }}" required placeholder="Descripción">
                @if ($errors->has('description'))
                    <li class="form-control-feedback" style="color: red">El producto ya existe en nuestra base de datos.</li>
                @endif

                <br>

                <label for="image"><strong>Imagen:</strong></label>
                {{-- poner la carga de fotografía --}}

                <br>

                <label for="price"><strong>Precio:</strong></label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" required placeholder="$0.00"> {{--$ {{ number_format(price, 2, ',', '.') }}--}}


              <br>
              <label for="stock"><strong>En stock:</strong></label>
              <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') }}" required placeholder="1">
              <input type="hidden" id="active" name="active" value="1">
              </div>
              <br>
              <center><div>
                <input type="submit" class="btn btn-info" value="Enviar">
              </div></center>
             </form>
           </div>  {{-- end jumbotron --}}
        </div> {{-- end row --}}
      </div> {{-- end container --}}
    </div> {{-- end main container --}}
  </div> {{-- end wrap --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
  </script>
  <script type="text/javascript" src="/assets/js/product.js"></script>

@endsection
