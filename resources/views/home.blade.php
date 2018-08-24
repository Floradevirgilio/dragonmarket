@extends('layouts.app')

@section('title', 'HOME - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
  @include('componentes/navbar')
  @include('componentes/carousel')

  <div class="container">
    <div class="row">

      <div class="card col-sm-12 col-md-6 col-lg-3 shadow-sm p-3 mb-5 bg-white rounded" style="margin-top: 10px;"> <!-- SECCIONES -->
        <div class="row justify-content-center" style="margin-top: 10px;">
          <h4><strong>CATEGORIAS</strong></h4>
        </div>

        <div> {{-- foreacheo las SECCIONES --}}
          <ul class="navbar-nav">
            @foreach ($categories as $id => $name)
              <li class="nav-item">
                <a class="nav-link" href="/showProducts/{{ $id }}"> {{ $name }} </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div> {{-- cierro secciones --}}

      @foreach ($pcs as $pc) {{-- itero una tarjeta con cada resultado de PCS ARMADAS --}}
        <div class="card text-center col-sm-12 col-md-6 col-lg-3 shadow-sm p-3 mb-5 bg-white rounded" style="margin-top: 10px;">
          <img class="card-img-top" src="/images/{{ $pc->id }}.jpg" alt=""> {{-- Laravel se para autom. en la carpeta public --}}

          <div  class="card-body hover">
            <li> {{ $pc->description }} </li>
          </div>

          <div class="card-body hover">
            <h4 class="card-title">$ {{ number_format($pc->price, 2, ',', '.') }}</h4>
          </div>

          <div class="card-footer bg-transparent">
            <label><strong>Agregar al Carrito</strong></label>
            <form action="/cart" method="POST">
              @csrf
              <div class="d-flex justify-content-center">
                <input class="form-control col-4" type="number" name="quantity" value="1" min='1' max='10'>
                <input type="hidden" name="product_id" value="{{ $pc->id }}">

                <button class='btn btn-info add-to-cart' type="submit">
                  <i class="fas fa-cart-plus" style="font-size: 1em"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      @endforeach
    </div> <!-- Cierro el ROW -->


    <div class="row justify-content-center"> {{-- ROW DE PRODUCTOS --}}
      @foreach ($products as $product) {{-- itero una tarjeta con cada resultado --}}
        <div class="card text-center col-sm-6 col-md-4 col-lg-2 shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem; margin-top: 10px;">

          <div class="card-header bg-transparent">
            <img src="/images/{{ $product->id }}.jpg" class="img06" alt="Video01"> {{-- Laravel se para autom. en la carpeta public --}}
          </div>

          <div class="card-body">
            <li class="card-text">{{ $product->description }}</li><br>
            <h5 class="card-title">${{ number_format($product->price, 2, ',', '.') }}</h5>
          </div>

          <div class="card-footer bg-transparent">
            <label><strong>Agregar al Carrito</strong></label>
            <form action="/cart" method="POST">
              @csrf
              <div class="d-flex justify-content-center">
                <input class="form-control col-6" type="number" name="quantity" value="1">
                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <button class='btn btn-info add-to-cart' type="submit">
                  <i class="fas fa-cart-plus" style="font-size: 1em"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  @include('componentes/carousel2')

@endsection
