<?php
/*
 * 1) Armar una función que, dada una cantidad (número) recibida como parámetro,
 * imprima la suma de todos los números pares empezando de 0 hasta la cantidad pedida.
 *
 * 2) Llamar a la función con diferentes cantidades y verificar el resultado.
 *
 * 3) Armar una nueva función que haga lo mismo pero utilizando otra repetitiva:
 * Si se uso FOR, usar WHILE. Si se uso WHILE, usar FOR.
 */

 function numerosPares($numero) {
   for ($i=0; $i <= $numero ; $i++) {
       while ($i % 2 == 0) {
         $i;
         break;
       }
 }

 }



function sumaPares($numero) {

  $numerosPares = [];

  for ($i=0; $i <= $numero ; $i++) {
      while ($i % 2 == 0) {
        $numerosPares[] = $i++;
        break;
      }
}

  return array_sum($numerosPares);

}

echo sumaPares(4);
