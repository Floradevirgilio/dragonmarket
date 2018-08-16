@extends('layouts.app')

@section('title', 'Mostrar Productos - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

	<div id="wrap">
		<div id="main" class="container">
			<div class="container">

				@php $products @endphp {{-- variable que voy a llenar con los resultados que me llegaron --}}

				@if (isset($searchResults)) {{-- si me llegaron resultados desde el buscador de la navbar --}}
					@php $products = $searchResults @endphp {{-- guardo esos resultados en $products --}}
				@elseif (isset($categoryProducts)) {{-- o si me llegaron por las categorias del home.. --}}
					@php $products = $categoryProducts; @endphp {{-- ..las guardo en $products para despues mostrarlas --}}
				@endif

				@if ($products) {{-- si el array tiene resultados --}}
					<center><div style="margin-top: 3em; margin-bottom: 2em"> {{-- muestro titulo y tabla con resultados --}}
						<h3><i class="fas fa-search-plus" style="font-size: 1em; margin-right: .5em"></i>RESULTADO DE LA BÚSQUEDA</h3>
					</div></center>

					<center>

						<table class="jumbotron table table-striped shadow p-3 mb-5 rounded" border="3">
							<thead>
								<tr>
									@php $columnas = ['Id', 'Descripcion', 'Cantidad', 'Precio', 'Comprar']; @endphp {{-- El titulo de cada columna --}}

									@foreach ($columnas as $columna) {{-- foreacheo una fila de <th> (table head) con los titulos de las columnas --}}
										<th><center> {{ $columna }} </center></th>
									@endforeach
								</tr>
							</thead>
							<tbody>
								@foreach ($products as $product) {{-- los resultados que me llegaron --}}
									<tr>
										<td><center> {{ $product->id }} </center></td>
										<td><center> {{ $product->description }} </center></td>
										<td> <input type='number' min='1' max='10' name='cantidad' value='1' class='form-control' /></td>
										<td><center> ${{ $product->price }} </center></td>
										<td>
											<center><button class='btn btn-info add-to-cart'><i class='fas fa-cart-plus' style='font-size: 1.1em'></i></button></center>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</center>

				@else {{-- si no se encontraron resultados --}}
					<center><div style="margin-top: 3em; margin-bottom: 2em">
						<h3><i class="fas fa-frown" style="font-size: 1em; margin-right: .5em"></i>NO SE ENCONTRARON RESULTADOS</h3>
					</div></center>
				@endif

				<center> {{-- el boton de volver al home se muestra siempre, con o sin resultados. Por eso está fuera del if --}}
					<a class="btn btn-primary shadow-sm mb-5 rounded" href="{{ route('home') }}"><i class="fas fa-home" style="font-size: 1em; margin-right: .5em"></i>Volver al home</a>
				</center>
			</div>
		</div> {{-- Cierro container --}}
	</div> {{-- Cierro wrap --}}
@endsection
