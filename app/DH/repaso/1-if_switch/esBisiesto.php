<?php

function esBisiesto($año) {
  if ($año % 4 == 0 && $año % 100 != 0 || $año % 400 == 0) {
    return "$año es bisiesto";
  } else {
  return "$año no es bisiesto";
}
}

echo esBisiesto($_POST['año']);
 ?>
