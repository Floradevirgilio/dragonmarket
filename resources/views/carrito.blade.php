@extends('componentes/layout')

@section('title', 'Carrito - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
	{{-- @php
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
				<center><i class="fas fa-shopping-cart mt-4" style="font-size: 2em; "></i></center>
				<div class="mt-3">
					<center><h3>Contenido del Carrito Temporal</h3></center>
				</div>

				{{ var_dump($_POST) }}
			</div>
		</div>
	</div>


		{{-- {{ var_dump($product) }} --}}

@endsection
