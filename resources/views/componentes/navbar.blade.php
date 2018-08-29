<div class='container-fluid' style="margin-bottom: 100px;">
	<nav class='navbar navbar-expand-md fixed-top navbar-light navbar-custom' >
		<button class='navbar-toggler navbar-toggler-right'
					type='button'
					data-toggle='collapse'
					data-target='#navbar5'>
			<span class='navbar-toggler-icon'></span>
		</button>
		<a class='navbar-brand' href='/'>
			<img src='../images/DMHead.png' alt='Logo' style='width: 50px;'>
		</a>
		<div class='navbar-collapse collapse justify-content-stretch' id='navbar5'>
			<div style='color: white;'>
				<ul class='navbar-nav'>
				{{-- chequeo si hay user logueado --}}
				@if (auth()->check())
					{{-- si el user es admin --}}
					@if (auth()->user()->admin == 1)
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle"
									id="navbarDropdown"
									data-toggle="dropdown">Administrar
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" 
										href="/abmCategory">ABM Categorías</a>
								<a class="dropdown-item" 
										href="/abmProduct">ABM Productos</a>
								<a class="dropdown-item" 
										href="/abmUser">ABM Usuarios</a>
							</div>
						</li>
					@else
						{{-- estas dos opciones se muestran para admins y clientes --}}
						<li class='nav-item'> 
							<a class='nav-link' href='/cart'>
								<i class="fas fa-shopping-cart"></i>({{ $productsCount }})
							</a>
						</li>
						@endif
							<li class='nav-item'>
								<a class="nav-link"
									href="{{route('actualizarDatosPersonales.show', ['user_id' => auth()->user()->id])}}">
									<span>{{ auth()->user()->first_name }}</span>
								</a>
							</li>
							<li>
								<div class="avatar">
									<img class="img-fluid mx-auto d-block"
											src='{{ Storage::url(auth()->user()->avatar) }}' alt='avatar' >
								</div>
							</li>
							<li class='nav-item'>
								<a class='nav-link' href='/logout'>
									<i class="fas fa-sign-out-alt"></i>Cerrar Sesión
								</a>
							</li>
						@else
							{{-- botonera para quien no está logeado --}}
							<li class='nav-item'>
								<a class='nav-link' href='/logInToShop'>
									<i class="fas fa-shopping-cart"></i>(0)
								</a>
							</li>
							<li class='nav-item'>
								<a class='nav-link' href='/login'>
									<i class="fas fa-sign-in-alt"></i>Ingreso
								</a>
							</li>
							<li class='nav-item'>
								<a class='nav-link' href='/register'>
									<i class="fas fa-user-edit"></i>Registro
								</a>
							</li>
						@endif
						<li class='nav-item'>
							<a class='nav-link' href='/faq'>
								<i class="fas fa-question-circle"></i> FAQ
							</a>
						</li>
				</ul>
			</div>
			<form class="form-inline"
					action='/showProducts'
					style="margin-left: auto;">
					@csrf
				<div class="form-group has-buscar">
					<i class="fa fa-search form-control-buscar"
							aria-hidden="true" 
							style="color:gray; font-size: 20px;">
					</i>
					<input class='form-control'
							type='text'
							name='txt'
							placeholder='Buscar'>
				</div>
			</form>
		</div>
	</nav>
</div>
