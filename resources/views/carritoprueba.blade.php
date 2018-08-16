@extends('componentes/layout')

@section('title', 'Detalle del Carro Temporal - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
	{{-- @php
	require_once '../../app/Http/Controllers/loader.php';
	require_once '../../app/Http/Controllers/DbMySQL.php';
	require_once '../../app/Http/Controllers/CarroTemporal.php';

	$action      = isset($_GET['action']) ? $_GET['action'] : '';
	$descripcion = isset($_GET['descripcion']) ? $_GET['descripcion'] : '';

	$num = 0; // Asumo que el carrito está vacío

	if ($_SESSION) {
		// Si la sesion está iniciada
		// leo el carrito para el usuario ($id)
		$id = $_SESSION['id'];
		$stmt = $db->productosCarroTemporal($id);
		// Si retorna algo, lo cuento con $num
		$num = $stmt->rowCount();
	}
	@endphp --}}

	<div id="wrap">
		<div id="main" class="container">
			<div class="container">
				<div class="row justify-content-center" style="margin-top: 50px;">
					<h3>Contenido del Carrito Temporal</h3>
				</div>
				<center><i class="fas fa-shopping-cart" style="font-size: 2em; margin-left: 10px"></i></center>


				{{-- @if ($action) {
					<center><div class='alert alert-info col-6'>
					<strong>{$descripcion}</strong>
					@switch($action)
              @case('removed')
                  {{ 'fue eliminado del carrito!' }}
                  @break

              @case('cantidad_updated')
                  {{ 'la cantidad ha sido actualizada!' }}
                  @break

							@case('failed')
		                {{ 'no se pudo actualizar la cantidad!' }}
		                @break

							@default
				             {{ 'cantidad es inválida!' }}

          @endswitch
						</div></center>
			    @endif --}}

				@if($products)
					<div class='row justify-content-center' style='margin-top: 50px;'>
						<div class='table-responsive'>";
						<table class='table table-hover table-bordered'>
							<thead class='thead-light'>
									<tr>
									<th class='textAlignLeft'>Descripción</th>
										<th>Precio</th>
										<th style='width:4em;'>Cantidad</th>
										<th style='width:4em;'>Sub Total</th>
										<th style='width:4em;'>Acciones</th>
										</tr>
										</thead>

										$total = 0
										while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
											extract($row);
                    @foreach ($product as $product)
											<tr>
												<td>
													<div class='product-id' style='display:none;'>{{ $product->$id }}</div>
													<div class='product-descripcion'>{{ $product->$description }}</div>
													</td>
												  <td>{{'$'.number_format($product->$price, 2, '.', ',')}}</td>
													<td>
													<div class='input-group'>";
															<input type='number' min='1' max='10'
															descripcion='cantidad'
															value='{{ $product->$quantity }}'
															class='form-control'>
															<span class='input-group-btn'>
																<button class='btn btn-info update-cantidad' type='button'>
																	<i class='glyphicon glyphicon-refresh'></i> Actualizar </button>
																	</span>
																	</div>
																	</td>
																	<td>{{'$'.number_format($subtotal = $product->$quantity * $product->$price, 2, '.', ',')}}</td>
																	<td>
																		<a href=''	class='btn btn-danger'>
																		<span class='glyphicon glyphicon-remove'></span> Quitar del carrito
																		</a>
																		</td>
																		</tr>

																	{{	$total += $subtotal }}

																	<tr>
																		<td><b>Total</b></td>
																		<td></td>
																		<td></td>
																		<td>{{'$'.number_format($subtotal, 2, '.', ',')}}</td>
																		<td>
																			<a href='' class='btn btn-success'>
																				<span class='glyphicon glyphicon-shopping-cart'></span> Pagar
																				</a>
																				</td>
																				</tr>
                      @endforeach
																				</table>
																				</div>
																				</div>

																			@else

																				<center><div class='alert alert-danger col-4' style='margin-top: 50px;'>
																					<strong>No se han encontrado productos</strong> en tu carrito!
																				</div></center>

																			@endif

																				<div class='row justify-content-center' style='margin-top: 75px;'>
																					<a class='btn btn-primary' href='{{ route('home') }}'>Volver</a>
																				</div>

																			</div>
																		</div>
																	</div>


@endsection
