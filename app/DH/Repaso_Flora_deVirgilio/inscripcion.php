<?php
include_once('arrays.php');


/*-Recibir la información en un PHP
-Redactar un texto que describa al usuario, que horarios y dias tiene disponibles. Incluir en
el texto su nombre y mail.
-Hacer que el texto generado tenga dos versiones: para hombre y mujer. Y que el mismo
sea dinámico según el género seleccionado. (Ej: Sabemos que estás interesado/a...) */


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  
    <h3>Hola <?php echo $_POST['nombre'] ?>, tu email es <?php echo $_POST['email'] ?> y sabemos que estás <?php if($_POST['genero'] == 1){ echo "interesada "; } else { echo "interesado ";}?>
en inscribirte
<?php if(count($_POST['dias']) == 1) { echo "el ";} else { echo "los días ";} ?><?php echo implode(", ", $_POST['dias']).", "; ?>
en <?php if(count($_POST['turnos']) == 1) { echo "el turno";} else { echo "los turnos ";} ?><?php echo implode(", ",$_POST['turnos'])."."; ?></h3>

  </body>
</html>
