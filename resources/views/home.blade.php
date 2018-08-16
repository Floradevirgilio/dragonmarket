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

		@php $pcsArray = $pcs->toArray(); @endphp {{-- convierto en array la collection de datos que me da el Redirect.
			Y además la filtra por los datos que el controller pidió en la búsqueda --}}
		@foreach ($pcsArray as $key => $column) {{-- itero una tarjeta con cada resultado de pcs armadas --}}
			<div class="card text-center col-sm-12 col-md-6 col-lg-3 shadow-sm p-3 mb-5 bg-white rounded" style="margin-top: 10px;">
				<form class="" action="/carrito/{{ $id }}" method="get">
					<img class="card-img-top" src="/images/{{$column['id']}}.jpg" alt=""> {{-- Laravel se para autom. en la carpeta public --}}

					<div  class="card-body hover">
						<li> {{ $column['description'] }} </li>
					</div>

					<div class="card-body hover">
						<h4 class="card-title">$ {{ number_format($column['price'], 2, ',', '.') }}</h4>
					</div>

					<div class="card-footer bg-transparent">
						<input type="text" name="id" value="{{ $column['id'] }}" style="display:none">
						<input type="text" name="description" value="{{ $column['description'] }}" style="display:none">
						<input type="text" name="quantity" value="1" style="display:none">

						<button class='btn btn-primary add-to-cart'>
							<i class="fas fa-shopping-cart" style="font-size: 1em; margin-right: .5em"></i>Comprar<?php // // // echo ($auth->loginControl()) ? "Agregar" : "Comprar"?>
						</button>
					</div>
				</form>
			</div>
		@endforeach
	</div> <!-- Cierro el ROW -->


	<div class="row justify-content-center"> {{-- ROW DE PRODUCTOS --}}
		@php $productsArray = $products->toArray(); @endphp {{-- convierto en array la collection de datos que me da el Redirect.
			Y además la filtra por los datos que el controller pidió en la búsqueda --}}
		@foreach ($productsArray as $key => $column) {{-- itero una tarjeta con cada resultado --}}
			<div class="card text-center col-sm-6 col-md-4 col-lg-2 shadow-sm p-3 mb-5 bg-white rounded" style="width: 18rem; margin-top: 10px;">

				<div class="card-header bg-transparent">
					<img src="/images/{{ $column['id'] }}.jpg" class="img06" alt="Video01"> {{-- Laravel se para autom. en la carpeta public --}}
				</div>

				<div class="card-body">
					<li class="card-text">{{ $column['description'] }}</li><br>
					<h5 class="card-title">${{ number_format($column['price'], 2, ',', '.') }}</h5>
				</div>

				<div class="card-footer bg-transparent">
					<form class="" action="/carrito/{{ $id }}" method="get">
						<input type="text" name="id" value="" style="display:none">
						<input type="text" name="descripcion" value="{{ $column['id'] }}" style="display:none">
						<input type="text" name="cantidad" value="1" style="display:none">

						<button class='btn btn-primary add-to-cart'>
							<i class="fas fa-shopping-cart" style="font-size: 1em; margin-right: .5em"></i>Comprar<?php // echo ($auth->loginControl()) ? "Agregar" : "Comprar"?>
						</button>
					</form>
				</div>
			</div>
		@endforeach
	</div>

</div>

@include('componentes/carousel2')

@endsection
