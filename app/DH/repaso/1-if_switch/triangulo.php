<?php


function triangulo($l1, $l2, $l3) {
  if($l1 == $l2 && $l1 == $l3) {
    return "Es un Equilátero";
  } if ($l1 == $l2 || $l1 == $l3 || $l2 == $l3) {
    return  "Es un Isósceles";
  } else {
      return  "Es un Escaleno";
  }

}

echo triangulo($_POST['lado1'], $_POST['lado2'], $_POST['lado3']);

 ?>
