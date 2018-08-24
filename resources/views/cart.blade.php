@extends('layouts.app')

@section('title', 'Carrito de compras - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

	<div id="wrap">
		<div id="main" class="container">
			<div class="container">

				@if (count($products) > 0) {{-- si Redirect nos mandó $cartProducts --}}
					<center><div style="margin-bottom: 2em"> {{-- muestro titulo y tabla con resultados --}}
						<h2><i class="fas fa-shopping-cart" style="font-size:1em; margin: 10 20 20 0"></i><br>CARRITO DE COMPRAS</h2>
					</div></center>

					<center>
						<table class="jumbotron table table-striped shadow p-3 mb-5 rounded" border="3">
							<thead>
								<tr>
									@php $columns = [ 'Descripcion', 'Cantidad', 'Actualizar', 'Eliminar', 'Precio', 'Total']; @endphp {{-- El titulo de cada columna --}}

									@foreach ($columns as $column) {{-- foreacheo una fila de <th> (table head) con los titulos de las columnas --}}
										<th><center> {{ $column }} </center></th>
									@endforeach
								</tr>
							</thead>
							<tbody>
								@php
								$i = 0; $finalPrice = 0;
								@endphp
								@foreach ($products as $product) {{-- los resultados que me llegaron --}}
									<tr>
										<td><center> {{ $product['description'] }} </center></td>
										<form action="{{route('cart.update', ['product_id' => $product['id']])}}" method="post">
											@csrf @method('PATCH')
											<td>
												<input type='number' min='1' max='10' name='quantity' value='{{ $quantities[$i]->quantity }}' class='form-control'>
											</td>
											<td>
												<center><button class='btn btn-info add-to-cart'>
													<i class='fas fa-sync-alt' style='font-size: 1.1em'></i>
												</button></center>
											</td>
										</form>
										<td>
											<form action="{{route('cart.destroy', ['product_id' => $product['id']])}}" method="post">
												@csrf @method('DELETE')
												<center><button class='btn btn-danger add-to-cart'>
													<i class='fas fa-minus-circle' style='font-size: 1.1em'></i>
												</button></center>
											</form>
										</td>
										<td><center> ${{ $product['price'] }} </center></td>
										<td><center> ${{ $product['price'] * $quantities[$i]->quantity }} </center></td>
									</tr>
									@php
										$finalPrice +=  $product['price'] * $quantities[$i]->quantity;
										$i++;
									@endphp
								@endforeach
								<tr>
									<td colspan="5" class="text-right"><strong>TOTAL</strong></td>
									<td><center><strong> ${{ $finalPrice }} </strong></center></td> {{-- $total nos la mandó redirect --}}
								</tr>
								<tr>
									<td colspan="6">
										<form action="/checkout" method="post"> @csrf
										<input type="hidden" name="finalPrice" value="{{$finalPrice}}">
										<center><button class='btn btn-success add-to-cart pull-right'><i class='fas fa-shopping-cart' style='font-size: 1.1em'></i> Comprar</button></center>
									</form>
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
