@extends('layouts.app')

@section('title', 'INGRESO - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
	<div id="wrap">
		<div id="main" class="container">
			<div class="container">
				<div class="row justify-content-around">

					<div class="jumbotron column col-xs-5 col-sm-5 col-md-6 col-lg-4 shadow p-4 mb-4 border {{ $errors->any() ? 'border-danger' : 'border-info' }}" style="margin-top: 50px;">
							<div class="row justify-content-center">
								<h2><i class="fas fa-sign-in-alt" style="font-size: 1em; margin-right: .3em"></i>INGRESO</h2>
							</div>
                            {!! $errors->first('error', '<center><span class="help-block" style="color:red"><li>:message</li></span></center>') !!}
                            {{-- muestra el mensaje de error que manda AuthController --}}
							<form action="/login" method="post"> @csrf

                                <div class="form-group">
                                    <label for="email"><strong>Email</strong></label>
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" id="email" name="email"
                                    value="{{ old('email') }}" required placeholder="Email">
								</div>

								<div class="form-group">
                                    <label for="password"><strong>Contraseña</strong></label>
                                    <input type="password" class="form-control {{ $errors->has('password') ? 'has-error' : '' }}" id="password" name="password" placeholder="******" required>
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
								<a href="olvide">Olvidé mi contraseña</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	@endsection
