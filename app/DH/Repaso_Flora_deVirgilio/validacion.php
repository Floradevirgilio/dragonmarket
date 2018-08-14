<?php

function validar($datos){

$errores = [];

if (trim($_POST['nombre']) == '') {
    $errores['nombre'] = 'Debe ingresar su Nombre';
}

if (trim($_POST['apellido']) == '') {
    $errores['apellido'] = 'Debe ingresar su Apellido';
}

if (strlen($_POST['nombre']) <= 3) {
  $errores['nombre'] = 'Debe tener más de 3 letras';
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errores['email'] = 'Debe ingresar un email válido';
}

/*4) Que haya seleccionado un país del select
-Si esta todo correcto, pasar al siguiente paso*/


if (empty($_POST['paises'])) {
  $errores['paises'] = 'Debe seleccionar un país';
}

return $errores;


}



 ?>
