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

				<?php
				if ($action) {
					echo "<center><div class='alert alert-info col-6'>";
					echo "<strong>{$descripcion}</strong>";
					switch ($action) {
						case 'removed'         : echo 'fue eliminado del carrito!'; break;
						case 'cantidad_updated': echo 'la cantidad ha sido actualizada!'; break;
						case 'failed'          : echo 'no se pudo actualizar la cantidad!'; break;
						case 'invalid_value'   : echo 'cantidad es inválida!'; break;
					}
					echo "</div></center>";
				}


				if($num > 0) {
					echo "<div class='row justify-content-center' style='margin-top: 50px;'>";
						echo "<div class='table-responsive'>";
							echo "<table class='table table-hover table-bordered'>";
								echo "<thead class='thead-light'>";
									echo "<tr>";
										echo "<th class='textAlignLeft'>Descripción</th>";
										echo "<th>Precio</th>";
										echo "<th style='width:4em;'>Cantidad</th>";
										echo "<th style='width:4em;'>Sub Total</th>";
										echo "<th style='width:4em;'>Acciones</th>";
										echo "</tr>";
										echo "</thead>";

										$total = 0;
										while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
											extract($row);

											echo "<tr>";
												echo "<td>";
													echo "<div class='product-id' style='display:none;'>{$id}</div>";
													echo "<div class='product-descripcion'>{$descripcion}</div>";
													echo "</td>";
													echo "<td>$ " . number_format($precio, 2, '.', ',') . "</td>";
													echo "<td>";
														echo "<div class='input-group'>";
															echo "<input type='number' min='1' max='10'
															descripcion='cantidad'
															value='{$cantidad}'
															class='form-control'>";
															echo "<span class='input-group-btn'>";
																echo "<button class='btn btn-info update-cantidad' type='button'>
																	<i class='glyphicon glyphicon-refresh'></i> Actualizar</button>";
																	echo "</span>";
																	echo "</div>";
																	echo "</td>";
																	echo "<td>$ " . number_format($subtotal, 2, '.', ',') . "</td>";
																	echo "<td>";
																		echo "<a href='eliminar.php?id={$id}&descripcion={$descripcion}'
																		class='btn btn-danger'>";
																		echo "<span class='glyphicon glyphicon-remove'></span> Quitar del carrito";
																		echo "</a>";
																		echo "</td>";
																		echo "</tr>";

																		$total += $subtotal;
																	}

																	echo "<tr>";
																		echo "<td><b>Total</b></td>";
																		echo "<td></td>";
																		echo "<td></td>";
																		echo "<td>$ " . number_format($total, 2, '.', ',') . "</td>";
																		echo "<td>";
																			echo "<a href='pagar.php?cli=$users_id' class='btn btn-success'>";
																				echo "<span class='glyphicon glyphicon-shopping-cart'></span> Pagar";
																				echo "</a>";
																				echo "</td>";
																				echo "</tr>";

																				echo "</table>";
																				echo "</div>";
																				echo "</div>";

																			} else { ?>

																				<center><div class='alert alert-danger col-4' style='margin-top: 50px;'>
																					<strong>No se han encontrado productos</strong> en tu carrito!
																				</div></center>

																				<?php } ?>

																				<div class='row justify-content-center' style='margin-top: 75px;'>
																					<a class='btn btn-primary' href='home.php'>Volver</a>
																				</div>

																			</div>
																		</div>
																	</div>


@endsection
