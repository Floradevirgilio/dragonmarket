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


		{{ var_dump($product) }}

@endsection
