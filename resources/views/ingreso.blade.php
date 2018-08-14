@extends('componentes/layout')

@section('title', 'INGRESO - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
	@php
	$errores = [];
	if ($_POST) {
		// checkeo errores con la instancia de
		// Validator, usando sus metodos.
		$errores = $validator->validarLogin($_POST, $db);
		if (!$errores) {
			// si no hay errores
			$usuario = $db->buscamePorEmail($_POST['email']);

			// Obtengo el id para buscar el avatar
			// y el nombre para mostrar en el NAV
			$id     = $usuario->getId();
			$nombre = $usuario->getNombre();
			$email  = $usuario->getEmail();

			// instancia de Auth que usa su metodo login()
			// para loguear al usuario
			$auth->login($id);

			header ('location: home.php');exit;
		}
	}
	@endphp
	<div id="wrap">
		<div id="main" class="container">
			<div class="container">
				<div class="row justify-content-around">

					<div class="jumbotron column col-xs-5 col-sm-5 col-md-6 col-lg-4 shadow p-4 mb-4 border <?php echo($errores ? 'border-danger' : 'border-info'); ?>" style="margin-top: 50px;">
						<div class="row justify-content-center">
							<?php if ($errores) { ?>
								<div class="alert alert-danger ">
									<?php foreach($errores as $error): ?>
										<li><?php echo $error ?></li>
									<?php endforeach ?>
								</div>
								<?php } ?>
							</div>
							<div class="row justify-content-center">
								<h2><i class="fas fa-sign-in-alt" style="font-size: 1em; margin-right: .3em"></i>INGRESO</h2>
							</div>
							<form action="" method="post" >
								<div class="form-group ">
									<label for="email">Email</label>
									<input type="text" id="email" name="email" placeholder="email"
									value="<?php echo ($_POST['email'] ?? '') ?>" class="form-control <?php if(!empty($errores['email'])) echo 'border border-danger'; ?>">
								</div>
								<div class="form-group">
									<label for="pass">Contraseña</label>
									<input type="password" id="pass" name="pass" placeholder="contraseña"
									class="form-control <?php if(!empty($errores['pass'])) echo 'border border-danger'; ?>">
								</div>
								<div class="row justify-content-center">
									<div class="checkbox">
										<label>
											<input type="checkbox" id="chk-recordarme"name="recordarme"> Recordarme en este equipo
										</label>
									</div>
								</div>
								<div class="row justify-content-center">
									<input type="submit" class="btn btn-info" value="Ingresar">
								</div>
							</form>

							<br>
							<div class="row justify-content-center">
								<a href="olvide.php">Olvidé mi contraseña</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection
