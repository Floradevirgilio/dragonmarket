@extends('layouts.app')

@section('title', 'HOME - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
	@include('componentes/carousel')

	<div class="container">
		<div class="row">

			<div class="card col-sm-12 col-md-6 col-lg-3 shadow-sm p-3 mb-5 bg-white rounded" style="margin-top: 10px;"> <!-- SECCIONES -->
				<div class="row justify-content-center" style="margin-top: 10px;">
					<h4><strong>PRODUCTOS</strong></h4>
				</div>

				<div class=""> {{-- foreacheo las secciones --}}
					<ul class="navbar-nav">
						@foreach ($categories as $id => $name)
							<li class="nav-item">
								<a class="nav-link"
								href="/mostrarProductos/{{ $id }}"> {{ $name }}
							</a>
						</li>
					@endforeach
				</ul>
			</div>
		</div>

		@foreach ($pcs as $pc) {{-- itero una tarjeta con cada resultado de pcs armadas --}}
			<div class="card text-center col-sm-12 col-md-6 col-lg-3 shadow-sm p-3 mb-5 bg-white rounded" style="margin-top: 10px;">
				<img class="card-img-top" src="/images/{{ $pc->id }}.jpg" alt=""> {{-- Laravel se para autom. en la carpeta public --}}

				<div  class="card-body hover">
					<li> {{ $pc->description }} </li>
				</div>

				<div class="card-body hover">
					<h4 class="card-title">$ {{ number_format($pc->price, 2, ',', '.') }}</h4>
				</div>

				<div class="card-footer bg-transparent">
					<form class="" action="/carrito" method="POST">
						@csrf
						<input type="hidden" name="id" value="{{ $pc->id }}">
						<label for="example-number-input" class="col-2 col-form-label row"><strong>Cantidad</strong></label>
						<input class="form-control" type="number" name="quantity" value="1"><br>

						<button class='btn btn-primary add-to-cart' type="submit">
							<i class="fas fa-shopping-cart" style="font-size: 1em; margin-right: .5em"></i>Agregar
							{{-- echo ($auth->loginControl()) ? "Agregar" : "Comprar" --}}
						</button>
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
					<h5 class="card-title">${{ number_format($product['price'], 2, ',', '.') }}</h5>
				</div>

				<div class="card-footer bg-transparent">
					<form class="" action="/carrito" method="POST">
						@csrf
						<input type="hidden" name="id" value="{{ $product->id }}">
						<label for="example-number-input" class="col-2 col-form-label row"><strong>Cantidad</strong></label>
						<input class="form-control" type="number" name="quantity" value="1"><br>

						<button class='btn btn-primary add-to-cart' type="submit">
							<i class="fas fa-shopping-cart" style="font-size: 1em; margin-right: .5em"></i>Agregar
							{{-- echo ($auth->loginControl()) ? "Agregar" : "Comprar" --}}
						</button>
					</form>
				</div>
			</div>
		@endforeach
	</div>
</div>

@include('componentes/carousel2')

@endsection
