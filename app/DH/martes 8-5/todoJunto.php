<?php
$funcionesEjecutadas = 0;
include 'funciones.php';
include 'superficie.php';

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

function mayorCirculo(int $radio1, int $radio2, int $radio3)
{

  return mayor(circulo($radio1), circulo($radio2), circulo($radio3));
}


echo mayorCirculo(2, 8, 3);
echo "<br>";
echo mayorCirculo(1, 0.2, 0.1);
echo "<br>";

echo $funcionesEjecutadas;
echo "<br>";

echo $pos = strpos("Me encanta php, a mi también me encanta php!", "php");



?>
