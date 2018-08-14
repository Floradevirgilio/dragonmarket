<?php

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




echo nota($_POST['a1']);
echo '<br>';
echo nota($_POST['a2']);
echo '<br>';
echo nota($_POST['a3']);
echo '<br>';
echo nota($_POST['a4']);
echo '<br>';
echo nota($_POST['a5']);
echo '<br>';
echo nota($_POST['a6']);
echo '<br>';
echo nota($_POST['a7']);
echo '<br>';
echo nota($_POST['a8']);
echo '<br>';
echo nota($_POST['a9']);
echo '<br>';
echo nota($_POST['a10']);
echo '<br>';

 ?>
