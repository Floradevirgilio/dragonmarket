<?php

$variable1 = 5;
$variable2 = 94;

if ($variable1 > $variable2) {
  echo 'El número mayor es ' . $variable1;
} else {
  echo 'El número mayor es ' . $variable2;
}

echo '<br/>';
echo '<br/>';

$num = rand(5,1);

if ($num == 3 || $num == 5) {
  echo $num;
}
echo '<br/>';
echo '<br/>';

if ($num == 3 || $num == 5) {
  echo $num;
} else {
  echo 'el número NO es 3';
}
echo '<br/>';
echo '<br/>';

$num2 = rand(100,1);

if($num2 > 50) {
  echo 'El número es mayor que 50';
} else {
  echo 'El número es menor que 50';
}
echo '<br/>';
echo '<br/>';

$nombreDeUsuario = "admin";
$contraseñaDeUsuario = "1234";

if ($nombreDeUsuario == "admin" && $contraseñaDeUsuario == "1234") {
  echo 'Bienvenido!';
} else if ($nombreDeUsuario == "admin" && !$contraseñaDeUsuario)
{
  echo 'La contraseña es incorrecta';
} else if (!$nombreDeUsuario && $contraseñaDeUsuario == "1234")
{
  echo 'El usuario es incorrecto';
}
else {
  echo 'Error en el login';
}
echo '<br/>';
echo '<br/>';

$edad = 26;
$casado = true;
$sexo = [];
$sexo[0] = "Masculino";
$sexo[1] = "Femenino";
$sexo[2] = "Otro";










?>
