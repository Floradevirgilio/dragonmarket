<?php

include_once('paises.php');
include_once('validacion.php');

/*-Si hay uno o más errores, mostrarlos en pantalla recorriendo el array de errores y
agregar un link "volver al formulario" (solo mostrar si hay errores)*/

$errores = [];

if ($_POST) {

  $errores = validar($_POST);

  if (!$errores) {
    /*-Si no hay errores en el array de errores, abrir sesion, guardar el nombre, el pais, y el mail
en sesión y redirigir a un nuevo archivo "respuesta.php".*/
    session_start();
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['paises'] = $_POST['paises'];
    $_SESSION['email'] = $_POST['email'];

    header('Location: respuesta.php');
    exit;
  }


}


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if ($errores) {
    ?>
    <div class="alert alert-danger">
      <ul>
        <?php foreach ($errores as $error) {?>
          <li> <?php  echo $error  ?>
          <a href="form.php">Volver al formulario</a> </li>
          <?php } ?>
      </ul>
    </div>
    <?php } ?>

    <div class="container">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group row">
          <label for="Nombre" class="col-sm-2 col-form-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre">
          </div>
        </div>
        <div class="form-group row">
          <label for="Apellido" class="col-sm-2 col-form-label">Apellido</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese el apellido">
          </div>
        </div>
        <div class="form-group row">
          <label for="Paises" class="col-form-label col-sm-12 col-md-3 col-lg-2">Países</label>
          <select class="form-control col-sm-8 col-md-8 col-lg-9" id="paises" name="paises" name="paises">
            <option></option>

            <?php foreach ($paises as $id => $pais) {

            ?>

              <option value="<?php echo $id; ?>"> <?php echo $paises[$id]; ?></option>
          <?php } ?>
          </select>
        </div>
        <div class="form-group row">
          <label for="Email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email">
          </div>
        </div>

        <div class="form-group row">
          <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </form>
    </div>




  </body>
</html>
