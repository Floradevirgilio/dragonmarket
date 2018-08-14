@extends('componentes/layout')

@section('title', 'OLVIDE LA CONTRASEÑA - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
  @php
  $errores = [];
  if ($_POST) { //SI hay $_POST
    $errores = $validator->validarEmail($_POST, $db); //llenamos el array de errores, esta vez con nuestra instancia de Validator, haciendo uso de sus metodos.
  }
  @endphp

  <div id="wrap">
    <div id="main" class="container">
      <div class="row justify-content-around">
        <div class="jumbotron column col-xs-5 col-sm-5 col-md-6 col-lg-4 shadow p-4 mb-4 border <?php echo($errores ? 'border-danger' : 'border-info'); ?>" style="margin-top: 50px;">
          <div class="row justify-content-center">
            <?php if ($errores): ?>
              <div class="alert alert-danger ">
                <?php foreach($errores as $error): ?>
                  <li><?php echo $error ?></li>
                <?php endforeach ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="row justify-content-center">
            <h3>Olvidé mi contraseña</h3>
          </div>
          <form action="" method="post" >
            <div class="form-group ">
              <label for="email">Te enviaremos un código a tu email para reestablecer tu contraseña</label>
              <input type="text" class="form-control" id="email" name="email" value="<?php echo ($_POST['email'] ?? '') ?>" placeholder="fulano@gmail.com">
            </div>
            <div class="row justify-content-center">
              <input type="submit" class="btn btn-info" name="enviar" value="Enviar">
            </div><br>

            <?php if ($_POST && empty($errores)): ?>
              <div class="row justify-content-center">
                <div class="alert alert-success ">
                  <li> Se envió un código a tu casilla de email!</li>
                </div>
              </div>
              <div>
                <center><a href="home.php">Volver al home</a></center>
              </div>
            <?php endif; ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
