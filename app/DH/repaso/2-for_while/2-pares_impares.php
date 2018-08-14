<?php
/*
 * 1) Armar una función que, dada una cantidad (número) y un booleano, recibidos
 * como parámetro, imprima los número pares o impares hasta llegar a la cantidad
 * pedida. (Si el segundo parametro es true, debe imprimir los números pares.
 * Si el segundo parametro es false, debe imprimir los impares).
 *
 * 2) Llamar a la función con diferentes cantidades y verificar el resultado.
 *
 * 3) Armar una nueva función que haga lo mismo pero utilizando otra repetitiva:
 * Si se uso FOR, usar WHILE. Si se uso WHILE, usar FOR.
 */


function paresImpares($numero, $booleano)
{
  if ($booleano == true) {
    for ($i=0; $i <= $numero ; $i++) {
        while ($i % 2 == 0) {
          echo $i.'; ';
          break;
        }
  }
} else {
  for ($i=0; $i <= $numero ; $i++) {
      while ($i % 2 != 0) {
        echo $i.'; ';
        break;
      }
}
}

}



echo paresImpares(10, true);
echo "<br>";
echo paresImpares(10, false);
echo "<br>";
