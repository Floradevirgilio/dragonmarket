<?php
include_once('arrays.php');

if($_POST){

header('Location: inscripcion.php');
exit;
}

 /*Crear un formulario en HTML con los siguientes ítems:
1) Nombre
2) Email
3) Género (masculino o femenino)
4) Horarios disponibles (mañana, tarde, noche)
5) Dias disponibles (lunes a domingo) */


 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container">
      <form action="inscripcion.php" method="post" enctype="multipart/form-data">
        <div class="form-group row">
          <label for="Nombre" class="col-sm-2 col-form-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre">
          </div>
        </div>

        <div class="form-group row">
          <label for="Email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email">
          </div>
        </div>

        <div class="form-group row">
          <label for="Género" class="col-form-label col-sm-12 col-md-3 col-lg-2">Género</label>
          <select class="form-control col-sm-8 col-md-8 col-lg-9" id="genero" name="genero" >
            <option></option>

            <?php foreach ($genero as $id => $g) {

            ?>

              <option value="<?php echo $id; ?>"> <?php echo $g; ?></option>
          <?php } ?>
          </select>
        </div>

        <label> Horarios disponibles:</label>
        <?php  foreach ($turnos as $turno) { ?>

        <input type="checkbox" name="turnos[]" value=" <?php echo $turno ?>"> <?php echo $turno ?>
        <br>
      <?php }  ?>

      <label> Días disponibles:</label>
      <?php  foreach ($dias as $dia) { ?>
      <input type="checkbox" name="dias[]" value="<?php echo $dia ?>"> <?php echo $dia ?>
      <br>
      <?php }  ?>


        <div class="form-group row">
          <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </form>
    </div>

  </body>
</html>
