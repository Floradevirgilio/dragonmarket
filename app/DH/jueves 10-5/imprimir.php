<?php


var_dump($_POST);
foreach ($_POST as $key => $value) {
 echo $key." ".$value.'<br>';
}

var_dump($_GET);
foreach ($_GET as $key => $value) {
 echo $key." ".$value.'<br>';
}

foreach ($_GET as $key => $value) {
  if($key=="Seleccionado"){
  var_dump($value);
} else {
  echo $key." ".$value.'<br>';
}
}


foreach (getallheaders() as $nombre => $valor) {
   echo "$nombre: $valor\n".'<br>';
}



 ?>
