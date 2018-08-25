@extends('layouts.app')

@section('title', 'Descripcion - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
  <div id="wrap">
    <div id="main" class="container">
      <div class="container">
        <div class="row justify-content-around">

          <div class="card text-center col-sm-12 col-md-10 col-lg-6 shadow-sm p-3 mb-5 bg-white rounded" >
              <img class="card-img-top" src="/images/{{ $product[0]['id'] }}.jpg" alt="" margin:'auto' > {{-- Laravel se para autom. en la carpeta public --}}
          </div>

          <div class="card text-center col-sm-12 col-md-10 col-lg-6 shadow-sm p-3 mb-5 bg-white rounded" >
              <div  class="card-body hover">
                  <h1 class="card-title">{{ $product[0]['description'] }}</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum sapien in magna scelerisque vehicula. Praesent facilisis. </p>
              </div>

              <div class="card-footer bg-transparent">
                  <div class="card-body hover">
                      <h1 class="card-title">$ {{ number_format($product[0]['price'], 2, ',', '.') }}</h1>
                  </div>

                  <label><strong>Agregar al Carrito</strong></label>
                  <form action="/cart" method="POST">
                      @csrf
                      <div class="d-flex justify-content-center">
                          <input class="form-control col-4" type="number" name="quantity" value="1" min='1' max='10'>
                          <input type="hidden" name="product_id" value="{{ $product[0]['id'] }}">

                          <button class='btn btn-info add-to-cart' type="submit">
                              <i class="fas fa-cart-plus" style="font-size: 1em"></i>
                          </button>
                      </div>
                  </form>
              </div>
          </div>

            <h3>También podrían interesarte:</h3>
          <div class="row justify-content-around"> {{-- ROW DE PRODUCTOS --}}

              @foreach ($products as $product) {{-- itero una tarjeta con cada resultado --}}
                  <div class="card text-center col-sm-6 col-md-4 col-lg-2 shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem; margin-top: 10px;">

                      <div class="card-header bg-transparent">
                        <a href="/product/{{ $product['id'] }}"><img src="/images/{{ $product['id'] }}.jpg" class="img06" alt="Video01" ></a>
                           {{-- Laravel se para autom. en la carpeta public --}}
                      </div>

                      <div class="card-body">
                          <h6 class="card-text">{{ $product['description'] }}</h6><br>
                          <h5 class="card-title">${{ number_format($product['price'], 2, ',', '.') }}</h5>
                      </div>

                      <div class="card-footer bg-transparent">
                          <label><strong>Agregar al Carrito</strong></label>
                          <form action="/cart" method="POST">
                              @csrf
                              <div class="d-flex justify-content-center">
                                  <input class="form-control col-7" type="number" name="quantity" value="1">
                                  <input type="hidden" name="product_id" value="{{ $product['id'] }}">

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
      </div>
    </div>
 </div>

@endsection
