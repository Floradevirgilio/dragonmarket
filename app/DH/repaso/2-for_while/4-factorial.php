<?php
/*
 * 1) Armar una función que, dado un número recibido como parámetro,
 * calcule y retorne su factorial.
 * (Nota:
 *      El factorial de un número esta formado por la multiplicación del
 *      mismo y todos sus anteriores:
 *      EJ: 5! (leido como "5 factorial") = 5 * 4 * 3 * 2 * 1 = 120
 * )
 *
 * 2) Llamar a la función con diferentes números y verificar el resultado.
 *
 * 3) Armar una nueva función que haga lo mismo pero utilizando otra repetitiva:
 * Si se uso FOR, usar WHILE. Si se uso WHILE, usar FOR.
 */


function factorial($numero) {
    $factorial = [];
    for ($i=1; $i <= $numero ; $i++) {
      $factorial[] = $i;
    }
    return array_product($factorial);
}



function factorial1($numero) {
    $factorial = [];
    $i = 1;
    while ($i <= $numero) {
      $factorial[] = $i++;
    }
   return array_product($factorial);
}


echo factorial(4);
echo "<br>";
echo factorial1(4);
echo "<br>";
