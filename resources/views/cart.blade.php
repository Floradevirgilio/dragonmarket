@extends('layouts.app')

@section('title', 'Carrito de compras - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

	<div id="wrap">
		<div id="main" class="container">
			<div class="container">

				{{-- {{ dd($products) }} --}}
        {{ dd($quantities) }}

				@if (isset($cartProducts)) {{-- si Redirect nos mandó $cartProducts --}}
					<center><div style="margin-top: 3em; margin-bottom: 2em"> {{-- muestro titulo y tabla con resultados --}}
						<h3><i class="fas fa-search-plus" style="font-size: 1em; margin-right: .5em"></i>RESULTADO DE LA BÚSQUEDA</h3>
					</div></center>

					<center>

						<table class="jumbotron table table-striped shadow p-3 mb-5 rounded" border="3">
							<thead>
								<tr>
									@php $columnas = ['Id', 'Descripcion', 'Cantidad', 'Actualizar', 'Eliminar', 'Precio']; @endphp {{-- El titulo de cada columna --}}

									@foreach ($columnas as $columna) {{-- foreacheo una fila de <th> (table head) con los titulos de las columnas --}}
										<th><center> {{ $columna }} </center></th>
									@endforeach
								</tr>
							</thead>
							<tbody>
								@foreach ($cartProducts as $product) {{-- los resultados que me llegaron --}}
									<tr>
										<td><center> {{ $product['id'] }} </center></td>
										<td><center> {{ $product['description'] }} </center></td>
										<td> <input type='number' min='1' max='10' name='cantidad' value='1' class='form-control' /></td>
										<td>
											<center><button class='btn btn-info add-to-cart'><i class='fas fa-sync-alt' style='font-size: 1.1em'></i></button></center>
										</td>
										<td>
											<center><button class='btn btn-danger add-to-cart'><i class='fas fa-minus-circle' style='font-size: 1.1em'></i></button></center>
										</td>
										<td><center> ${{ $product['price'] }} </center></td>
										{{-- <td><center> ${{ $total }} </center></td> --}}

									</tr>
								@endforeach
								<tr>
									<td colspan="5" class="text-right"><strong>TOTAL</strong></td>
									<td><center><strong> ${{ $total }} </strong></center></td> {{-- $total nos la mandó redirect --}}
								</tr>
								<tr>
									<td colspan="6">
										<center><button class='btn btn-success add-to-cart pull-right'><i class='fas fa-shopping-cart' style='font-size: 1.1em'></i> Comprar</button></center>
									</td>
								</tr>
							</tbody>
						</table>
					</center>

				@else {{-- si no se encontraron resultados --}}
					<center><div style="margin-top: 3em; margin-bottom: 2em">
                        <br><h3> EL CARRITO DE COMPRAS ESTÁ VACÍO</h3>
                        <img src="images/empty_shopping_cart.png" alt="empty_cart">
					</div></center>
				@endif

				<center> {{-- el boton de volver al home se muestra siempre, con o sin resultados. Por eso está fuera del if --}}
					<a class="btn btn-primary shadow-sm mb-5 rounded" href="/"><i class="fas fa-home" style="font-size: 1em; margin-right: .5em"></i>Volver al home</a>
				</center>
			</div>
		</div> {{-- Cierro container --}}
	</div> {{-- Cierro wrap --}}
@endsection
