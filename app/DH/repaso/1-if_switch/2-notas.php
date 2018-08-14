<?php
/*
 * 1) Dada la siguiente tabla:
 *      Porcentaje >= 90% : A++
 *      Porcentaje >= 80% : A+
 *      Porcentaje >= 70% : A
 *      Porcentaje >= 60% : A-
 *      Porcentaje >= 50% : R
 *      Porcentaje < 50% : 2
 * Escribir una función que, dado un porcentaje (número) recibido por parámetro,
 * retorne la nota correspondiente.
 *
 * 2) Llamar a la función con diferentes porcentajes y verificar el resultado.
 *
 * 3) Armar un formulario que imprima los nombre de 10 alumnos, junto con inputs
 * para ingresar el porcentaje obtenido por cada uno. Utilizar esos datos para
 * calcular y mostrar la nota obtenida por cada alumno.
 */
function nota($porcentaje) {
  $calificacion = [
                    9 => 'A++',
                    8 => 'A+',
                    7 => 'A',
                    6 => 'A-',
                    5 => 'R',
                    4 => 2
                  ];

  if ($porcentaje >= 90) {
    return $calificacion[9];
  }
  elseif($porcentaje >= 80) {
    return $calificacion[8];
  }
  elseif($porcentaje >= 70) {
    return $calificacion[7];
  }
  elseif($porcentaje >= 60) {
    return $calificacion[6];
  }
  elseif($porcentaje >= 50) {
    return $calificacion[5];
  } else {
  return $calificacion[4];
}
}


echo nota(62);
echo '<br>';
echo nota(2);
echo '<br>';
echo nota(99);
echo '<br>';
echo nota(32);
echo '<br>';
