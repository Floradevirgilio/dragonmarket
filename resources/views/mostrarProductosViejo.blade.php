@extends('componentes/layout')

@section('title', 'Mostrar Productos - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
	<div id="wrap">
		<div id="main" class="container">
			<div class="container">

			@php $searchResults = $searchResults->toArray() @endphp {{-- convierto en array la collection de datos que me da el Redirect.
				Y además la filtra por los datos que el controller pidió en la query de búsqueda --}}
				@if ($searchResults) {{-- si el array tiene resultados --}}
					<center><div style="margin-top: 3em; margin-bottom: 2em"> {{-- muestro titulo y tabla con resultados --}}
						<h3><i class="fas fa-search-plus" style="font-size: 1em; margin-right: .5em"></i>RESULTADO DE LA BÚSQUEDA</h3>
					</div></center>

					<center>
						<table class="jumbotron table table-striped shadow p-3 mb-5 rounded" border="3">
							<thead>
								<tr>
									@php $columnas = ['Id', 'Descripcion', 'Cantidad', 'Precio', 'Comprar']; @endphp {{-- El titulo de cada columna --}}

									@foreach ($columnas as $columna) {{-- foreacheo una fila de <th> (table head) con los titulos de las columnas --}}
										@php echo "<th><center> $columna </center></th>"; @endphp
									@endforeach
								</tr>
							</thead>
							<tbody>
								@foreach ($searchResults as $key => $producto) {{-- foreacheo los datos del producto que se van a mostrar en la tabla --}}
									@php
									echo "<tr>";
									echo "<td><center>" . $producto['id'] . "</center></td>";
									echo "<td><center>" . $producto['description'] . "</center></td>";
									echo "<td> <input type='number' min='1' max='10' name='cantidad' value='1' class='form-control' /></td>";
									echo "<td><center>$" . $producto['price'] . "</center></td>";
									echo "<td>";
									echo "<center><button class='btn btn-info add-to-cart'><i class='fas fa-cart-plus' style='font-size: 1.1em'></i></button></center>";
									echo "</td>";
									echo "</tr>";
									@endphp
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
					<a class="btn btn-primary shadow-sm mb-5 rounded" href="home"><i class="fas fa-home" style="font-size: 1em; margin-right: .5em"></i>Volver al home</a>
				</center>

			</div>
		</div>
	</div>
@endsection
