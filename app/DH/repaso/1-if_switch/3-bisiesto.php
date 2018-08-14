<?php
/*
 * 1) Armar una función que, dado un año (número) recibido por parámetro,
 * indique si es un año bisiesto o no.
 * (Nota:
 *      Un año es bisiesto si:
 *          - Es divisible por 4 Y
 *          - No es divisible por 100 o es divisible por 400
 * )
 *
 * 2) Llamar a la función con diferentes años y verificar el resultado.
 *
 * 3) Armar un formulario que permita que un usuario ingrese el año y
 * utilizar ese dato para llamar a la función y mostrar el resultado.
 */

function esBisiesto($año) {
  if ($año % 4 == 0 && $año % 100 != 0 || $año % 400 == 0) {
    return "$año es bisiesto";
  } else {
  return "$año no es bisiesto";
}
}

echo esBisiesto(2000);
echo "<br>";
echo esBisiesto(2001);
echo "<br>";
echo esBisiesto(2002);
echo "<br>";
echo esBisiesto(2003);
echo "<br>";
echo esBisiesto(2004);
echo "<br>";
