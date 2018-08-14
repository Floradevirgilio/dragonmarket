<?php
include_once('operable.php');
include_once('resta.php');
include_once('suma.php');
include_once('division.php');
include_once('multiplicacion.php');
include_once('calculadora.php');
include_once('operacionFactory.php');


///4. Crear un archivo main.php que incluya la clase calculadora. Dado esto lograr que devuelva:
//a. El resultado de 1 + 2
//b. El resultado de 10 - 5
//c. El resultado de 100 * 7
//d. El resultado de 500 / 20
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>Estos son los resultados</h1>

<h3>Suma: </h3><?php $suma = new Calculadora(calculadora::SUMA, 1, 2); echo $suma->operar();  ?>
<h3>Resta</h3> <?php $resta = new Calculadora(calculadora::RESTA, 10, 5); echo $resta->operar();  ?>
<h3>Multiplicación</h3> <?php $multi = new Calculadora(calculadora::MULTI, 100, 7); echo $multi->operar();  ?>
<h3>División</h3> <?php $divi = new Calculadora(calculadora::DIVI, 500, 20); echo $divi->operar();  ?>




  </body>
</html>
