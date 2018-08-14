<?php
/*
 * 1) Armar una función que, dado un consumo (float) recibido por parámetro,
 * retorne el valor total de la factura a pagar.
 *      Los valores son los siguientes:
 *          Consumo <= 50Kwh: 0.5 * unidad.
 *          Consumo <= 100Kwh: 0.75 * unidad.
 *          Consumo <= 250Kwh: 1.20 * unidad.
 *          Consumo <= 300Kwh: 1.50 * unidad.
 *          Consumo > 300Kwh: 2.50 * unidad.
 *      Ademas, se debe agregar un I.V.A. del 21% al subtotal.
 *
 * 2) Llamar a la función con diferentes consumos y verificar el resultado.
 *
 * 3) Armar un formulario que permita que un usuario ingrese su consumo y
 * utilizar ese dato para llamar a la función y mostrar el costo.
 */


function aPagar($consumo) {
  if ($consumo <= 50) {
      $subtotal = $consumo * 0.5;
      return "A pagar $". ($subtotal + ($subtotal * 0.21));
  }
  elseif ($consumo <= 100) {
      $subtotal = $consumo * 0.75;
      return "A pagar $". ($subtotal + ($subtotal * 0.21));
  }
  elseif ($consumo <= 250) {
      $subtotal = $consumo * 1.20;
      return "A pagar $". ($subtotal + ($subtotal * 0.21));
  }
  elseif ($consumo <= 300) {
      $subtotal = $consumo * 1.50;
      return "A pagar $". ($subtotal + ($subtotal * 0.21));
  }
  $subtotal = $consumo * 2.50;
  return "A pagar $". ($subtotal + ($subtotal * 0.21));
}

echo aPagar(20);
echo "<br>";
echo aPagar(100);
echo "<br>";
echo aPagar(150);
echo "<br>";
echo aPagar(270);
echo "<br>";
echo aPagar(500);
echo "<br>";
