<?php
  echo $entero = 4 ;
  echo '<br/>';
  var_dump ($entero);
  echo '<br/>';
  echo $decimal = 0.8 ;
  echo '<br/>';
  var_dump ($decimal);
  echo '<br/>';
  echo '<br/>';
  echo $cadenasimple = ' Hola qué tal ';
  echo '<br/>';
  var_dump ($cadenasimple);
  echo '<br/>';
  echo $cadenadoble = " Hola qué tal ";
  echo '<br/>';
  var_dump ($cadenadoble);
  echo '<br/>';
  echo '<br/>';
  echo $entero.$cadenasimple;
  echo '<br/>';
  var_dump ($entero.$cadenasimple);
  echo '<br/>';
  echo $cadenasimple.$decimal;
  echo '<br/>';
  var_dump ($cadenasimple.$decimal);
  echo '<br/>';
  echo '<br/>';
  echo $uno = "Tres ";
  echo '<br/>';
  echo $dos = "tristes ";
  echo '<br/>';
  echo $tres = "tigres ";
  echo '<br/>';
  echo $cuatro = "tragan ";
  echo '<br/>';
  echo $cinco = "trigo ";
  echo '<br/>';
  echo $seis = "en ";
  echo '<br/>';
  echo $siete = "un ";
  echo '<br/>';
  echo $ocho = "trigal";
  echo '<br/>';
  echo '<br/>';
  echo $uno.$dos.$tres.$cuatro.$cinco.$seis.$siete.$ocho;
  echo '<br/>';
  echo $cadenasimple.$tres;
  echo '<br/>';
  echo '<br/>';
  echo '<br/>';
  $miArray = [];
  $miArray[0] = "Hola";
  $miArray[1] = "Chau";
  $miArray[0] = [];
  $miArray[0][] = "Chauuu";
  var_dump($miArray);
  echo '<br/>';
  echo '<br/>';
  echo '<br/>';

  $auto = [];
  $auto["color"] = ["Negro", "Verde"];
  $auto["marca"] = "Ford";
  $auto["anio"] = 1992;
  $auto[]= "Prueba";

  print_r($auto);





?>
