<?php
/*
 * 1) Armar una función que, dada una cantidad (número) recibida como parámetro,
 * imprima los número pares hasta llegar a la cantidad pedida.
 *
 * 2) Llamar a la función con diferentes cantidades y verificar el resultado.
 *
 * 3) Armar una nueva función que haga lo mismo pero utilizando otra repetitiva:
 * Si se uso FOR, usar WHILE. Si se uso WHILE, usar FOR.
 */


function numerosPares($numero) {
  for ($i=0; $i <= $numero ; $i++) {
      while ($i % 2 == 0) {
        echo $i.'; ';
        break;
      }
}

}

echo numerosPares(51);
echo "<br>";
echo numerosPares(25);
echo "<br>";
echo numerosPares(10);
echo "<br>";



function esPar($numero) {
  for ($i = 0; $i <= $numero; $i++) {
      if( $i % 2 == 0)  {echo $i.'; ';
      }
}
}



echo esPar(25);
echo "<br>";
echo esPar(10);
echo "<br>";
