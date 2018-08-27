@extends('layouts.app')

@section('title', 'Carrito de compras - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

	<div id="wrap">
		<div id="main" class="container">
			<div class="container" style="margin-top: 100px;">

				@if (count($products) > 0) {{-- si Redirect nos mandó $cartProducts --}}
					<div style="text-align: center;"> {{-- muestro titulo y tabla con resultados --}}
						<h5><strong>CARRITO DE COMPRAS</strong></h5>
					</div>
					<div>
						<table class="jumbotron table table-striped shadow p-3 mb-5 rounded" border="2">
							<thead>
								<tr>
									{{-- Títulos de las columnas --}}
									@php $columns = [ 'Descripción',
													  'Cantidad',
													  'Actualizar',
													  'Eliminar',
													  'Precio',
													  'Total'];
									@endphp
									{{-- foreacheo una fila de <th> (table head) con los titulos de las columnas --}}
									@foreach ($columns as $column)
										<th style="text-align: center;"> {{ $column }} </th>
									@endforeach
								</tr>
							</thead>
							<tbody>
								@php
								$i = 0; $finalPrice = 0;
								@endphp
								@foreach ($products as $product) {{-- los resultados que me llegaron --}}
									<tr>
										<td style="text-align: left;">
											{{ $product['description'] }}
										</td>
										<form action="{{route('cart.update', ['product_id' => $product['id']])}}" method="post">
											@csrf @method('PATCH')
											<td>
												<input type='number'
												       min='1'
												       max='10'
												       name='quantity'
												       value='{{ $quantities[$i]->quantity }}'
												       class='form-control'>
											</td>
											<td>
												<center>
													<button class='btn btn-info add-to-cart'>
														<i class='fas fa-sync-alt'></i>
													</button>
												</center>
											</td>
										</form>
										<td>
											<form action="{{route('cart.destroy', ['product_id' => $product['id']])}}"
												  method="post">
												@csrf @method('DELETE')
												<center>
													<button class='btn btn-danger add-to-cart'>
														<i class='fas fa-minus-circle'></i>
													</button>
												</center>
											</form>
										</td>
										<td>
											<center>
												${{ (number_format($product['price'], 2, ',', '.')) }}
											</center>
										</td>
										<td>
											<center>
												${{ (number_format(($product['price'] * $quantities[$i]->quantity), 2, ',', '.')) }}
											</center>
										</td>
									</tr>
									@php
										$finalPrice +=  $product['price'] * $quantities[$i]->quantity;
										$i++;
									@endphp
								@endforeach
								<tr>
									<td colspan="5"
									    class="text-right"><strong>TOTAL</strong>
									</td>
									<td>
										<center>
											<strong>
												${{ (number_format($finalPrice, 2, ',', '.')) }}
											</strong>
										</center>
									</td> {{-- $total nos la mandó redirect --}}
								</tr>
								<tr>
									<td colspan="6">
										<form action="/checkout" method="post"> @csrf
											<input type="hidden"
												   name="finalPrice"
												   value="{{$finalPrice}}">
											<center>
												<button class='btn btn-success add-to-cart pull-right'>
													<i class='fas fa-shopping-cart'></i> Comprar
												</button>
											</center>
										</form>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

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
