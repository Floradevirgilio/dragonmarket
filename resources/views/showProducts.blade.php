@extends('layouts.app')

@section('title', 'Mostrar Productos - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

<div id="wrap">
	<div id="main" class="container">
		<div class="container">
            {{-- muestro titulo y tabla con resultados --}}
            <div style="text-align: center;">
                <h5><strong>RESULTADO BÚSQUEDA</strong></h5>
				@if (isset($searchResults))
					@php $products = $searchResults @endphp
				    <h5>Texto: </h5>
                    <h5>..........</h5>
                @elseif (isset($categoryProducts))
					@php $products = $categoryProducts; @endphp
                      <h5>Categoría: </h5>
				@endif
            </div>

            @if ($products) {{-- si el array tiene resultados --}}
				<table class="jumbotron table table-striped shadow p-3 mb-5 rounded" border="2"
                       style="text-align: center;">
				   <thead>
				       <tr>
                            {{-- Título de cada columna --}}
							@php $columnas = [ 'Descripcion',
                                 'Cantidad',
                                 'Precio',
                                 'Comprar' ];
              @endphp

                            {{-- Completo la fila columnas
                                con los datos que definí en $columnas --}}
							@foreach ($columnas as $columna)
								<th><center> {{ $columna }} </center></th>
                           @endforeach
						</tr>
				    </thead>
				    <tbody>
                        {{-- Muestro los resultados que llegaron --}}
						@foreach ($products as $product)
							<tr>
								<form action="/cart" method="POST">
                                @csrf
									<td style="text-align: left;">
                                        {{ $product['description'] }}
                                    </td>
									<td>
                                        <input type='number'
                                               min='1'
                                               max='10'
                                               name='quantity'
                                               value='1'
                                               class='form-control'>
                                    </td>
									     <input type="hidden"
                                                name="product_id"
                                                value="{{ $product['id'] }}">
									<td style="text-align:right;">
                                        ${{ number_format($product['price'], 2, ',', '.') }}
                                    </td>
									<td>
										<center>
                                            <button type="submit"
                                                    class='btn btn-primary add-to-cart'>
                                                    <i class='fas fa-cart-plus'></i>
                                            </button>
                                        </center>
								</form>
								</td>
							</tr>
						@endforeach
					</tbody>
			    </table>
			{{-- si no se encontraron resultados --}}
			@else
				<div style="margin-top: 30px; margin-bottom: 30px; text-align: center;">
					<img src="images/no_results.png" style="margin-bottom: 15px; width: 150px;">
					<h6><strong>No se encontraron resultados</strong></h6>
                    <h6><strong>Para la búsqueda solicitada</strong></h6>
			    </div>
            @endif

            {{-- el boton de volver al home
                se muestra con o sin resultados,
                por eso está fuera del if --}}
			<div style="text-align: center;">
				<a class="btn btn-primary"
                   href="/">
                   <i class="fas fa-primary"></i>Volver al home
                </a>
			</div>
		</div>
	</div> {{-- Cierro container --}}
</div> {{-- Cierro wrap --}}
@endsection
