<?php

function triangulo(int $base, int $altura): float
{ global $funcionesEjecutadas;
  return ($base * $altura) / 2;

}

echo triangulo(10, 16);
echo "<br>";


function rectangulo(int $base, int $altura): int
{ global $funcionesEjecutadas;
  return ($base * $altura);
}

echo rectangulo(10, 16);
echo "<br>";

function cuadrado(int $base): int
{global $funcionesEjecutadas;
  return $base * $base;
}

echo cuadrado(10);
echo "<br>";


function circulo(int $radio): float
{ global $funcionesEjecutadas;
  return pi()*($radio * $radio);
}

echo circulo(10);
echo "<br>";







 ?>
