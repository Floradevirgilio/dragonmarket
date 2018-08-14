<?php

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

echo aPagar($_POST['consumo']);



 ?>
