<?php
$numeroMagico = 8;

function mayor(int $num1, int $num2, int $num3)
{
  global $funcionesEjecutadas;
  if ($num1 > $num2 && $num1 > $num3) {
    return $num1;
}
else if ($num2 > $num1 && $num2 > $num3) {
    return $num2;
}
else {
    return $num3;
}
}

echo mayor(1, 2, 3);

echo "<br>";

function tabla(int $num1, int $num2) {
  global $funcionesEjecutadas;
  $numeros = [];
  for ($i = $num1; $i < $num2; $i++) {
    $numeros[] = $i;
}
    return $numeros;
}

foreach (tabla(2, 9) as $value) {
  echo $value;
}
echo "<br>";


//function mayorNumeroMagico(int $num1, int $num2)
//{ global $funcionesEjecutadas;
//  do  {
//      global $numeroMagico;
//      $num3 = $numeroMagico;
//      if ($num1 > $num2 && $num1 > $num3) {
//    return $num1;
//}
//else if ($num2 > $num1 && $num2 > $num3) {
//    return $num2;
//}
//else {
//    return $num3;
//}
//} while ($num3 == null);

//}




function mayorNumeroMagic(int $num1, int $num2, int $num3=null)
{ global $funcionesEjecutadas;

      global $numeroMagico;
      if ($num3==null) {
      $num3 = $numeroMagico;
    }
      if ($num1 > $num2 && $num1 > $num3) {
        return $num1;
}
else if ($num2 > $num1 && $num2 > $num3) {
      return $num2;
}
else {
      return $num3;
}
}

echo mayorNumeroMagic(7, 2, 5);
echo "<br>";
echo mayorNumeroMagic(7, 2);
echo "<br>";
echo mayorNumeroMagic(10,1,12);
echo "<br>";
echo mayorNumeroMagic(4,5);
echo "<br>";
echo mayorNumeroMagic(9,10);
echo "<br>";


function tablaNumeroMagico(int $num1) {
  global $funcionesEjecutadas;
  do {
  $numeros = [];
  global $numeroMagico;
  $num2 = $numeroMagico;
  for ($i = $num1; $i < $num2; $i++) {
    $numeros[] = $i;
}
    return $numeros;
} while ($num2 == null);
}

foreach (tablaNumeroMagico(2) as $value) {
  echo $value."; ";
}
echo "<br>";

foreach (tablaNumeroMagico(3) as $value) {
  echo $value."; ";
}
echo "<br>";

foreach (tablaNumeroMagico(2, 10) as $value) {
  echo $value."; ";
}
echo "<br>";




?>
