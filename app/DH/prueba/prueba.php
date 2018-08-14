<?php

for ($i=1; $i<=100; $i++) {
  echo $i." ;";
}
echo '<br/>';
echo '<br/>';
echo '<br/>';

for ($i = 1; $i = rand(100,0); $i++) {
  echo $i." ;";
}
echo '<br/>';
echo '<br/>';

for ($i=0; $i<=100; $i=$i+2) {
  echo $i." ;";
}
echo '<br/>';
echo '<br/>';

$i = 100;
while ($i<= 100 && $i>= 85) {
  echo $i--." ;";
}
echo '<br/>';
echo '<br/>';

$contador = 1;
while ($contador<=5) {
  echo $contador*2;
  echo'<br>';
  $contador++;
}
echo '<br/>';
echo '<br/>';

$cantidadDeTiros = 0;
$cantidadDeCaras = 0;
while ($cantidadDeCaras<=5){
  $cantidadDeTiros ++;
  $moneda = rand(1,0);
  if($moneda== 1){
    $cantidadDeCaras++;
  }
  if($cantidadDeCaras == 5) {
    echo $cantidadDeTiros;

  }
}
echo '<br/>';
echo '<br/>';

$cantidadDeTiros = 0;
do {$cantidadDeTiros++;
  $moneda = rand(1,0);
  if($moneda==1) {
    echo $cantidadDeTiros;
    break;
  }
}
  while(true);
echo '<br/>';
echo '<br/>';

$array = ["Roma", "Ale", "Dani", "Alan", "Flora"];
for ($i=0; $i<=4; $i++) {
  echo $array[$i]."; ";
}
echo '<br/>';
echo '<br/>';

$i = 0;
while ($i < count($array)) {
  echo $array[$i]."; ";
  $i++;
}
echo '<br/>';
echo '<br/>';

$i = 0;
do {
  echo $array[$i]."; ";
  $i++;
} while ($i < count($array));

echo '<br/>';
echo '<br/>';

$i = 0;
foreach ($array as $i => $value) {
  echo $array[$i]."; ";
}
echo '<br/>';
echo '<br/>';


$numeros = [rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0)];
for ($i=0; $i < count($numeros)  ; $i++) {
  if ($numeros[$i] == 5) {
    echo "Se encontró un 5!";
    break;
  } else {
  echo $numeros[$i]."; ";
}
}
echo '<br/>';
echo '<br/>';

$i = 0;
$numeros = [rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0)];
while ($i < count($numeros)) {
  if ($numeros[$i] == 5) {
    echo "Se encontró un 5!";
    break;
  } else {
    echo $numeros[$i]."; ";
    $i++;
}
}

echo '<br/>';
echo '<br/>';


$i = 0;
$numeros = [rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0), rand(10, 0)];
do {
  if ($numeros[$i] == 5) {
    echo "Se encontró un 5!";
    break;
  } else {
    echo $numeros[$i]."; ";
    $i++;
}
} while ($i < count($numeros));

echo '<br/>';
echo '<br/>';



$miAuto = [
    "Patente" => "AA 123 HB",
    "Marca" => "Ford"
];

foreach ($miAuto as $key => $value) {
  if ($key == "Marca") {
    echo $value;
  }
}
echo '<br/>';
echo '<br/>';

$letras = range("a", "o");
foreach ($letras as $index => $letter) {
    echo "En la posición $index se encuentra el valor $letter";
    echo '<br/>';
}
echo '<br/>';
echo '<br/>';

$mascota = [
  "animal" => "perro",
  "edad" => 5,
  "altura" => "40 cm",
  "nombre" => "Rodo"
];

foreach ($mascota as $key => $value) {
  echo "$key: $value";
  echo '<br/>';
}

echo '<br/>';
echo '<br/>';

$ceu = array ( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas",
"Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris",
"Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid",
"Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius",
"Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga",
"Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;


ksort($ceu);
foreach ($ceu as $key => $value) {
  echo "La capital de $key es $value";
  echo '<br/>';
}
  echo '<br/>';
  echo '<br/>';

  $ceu = [
  "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
  "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
  "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
  "Francia" => ["Paris", "Nantes", "Lyon"],
  "Italia" => ["Roma", "Milan", "Venecia"],
  "Alemania" => ["Munich", "Berlin", "Frankfurt"]
  ];

foreach ($ceu as $key => $value) {
  echo "Las ciudades de $key son:";
  echo '<br/>';
  for ($i=0; $i < count($value) ; $i++) {
    echo "- $value[$i]. <br/>";
  }
}
echo '<br/>';
echo '<br/>';


foreach ($ceu as $key => $ciudades) {
  echo "Las ciudades de $key son:";
  echo '<br/>';
  echo '<ul>';
    foreach ($ciudades as $ciudad) {
    echo "<li> $ciudad</li>";
  }
    echo '</ul>';
}
echo '<br/>';
echo '<br/>';


var_dump($ceu);
$ceu["Argentina"][0] = "esAmericano";
echo '<br/>';
echo '<br/>';
var_dump($ceu);
$ceu["Brasil"][0] = "esAmericano";
$ceu["Colombia"][0] = "esAmericano";
echo '<br/>';
echo '<br/>';
var_dump($ceu);
echo '<br/>';
echo '<br/>';

foreach ($ceu as $key => $value) {
  if ($value[0] == "esAmericano") {
    echo "$key; ";
}
}
echo '<br/>';
echo '<br/>';

$ceu = [
"Argentina" => [
  'ciudades' => ["Buenos Aires", "Córdoba", "Santa Fé"],
  'esAmericano' => true],
"Brasil" => [
  'ciudades' => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
  'esAmericano' => true],
"Colombia" => [
  'ciudades' => ["Cartagena", "Bogota", "Barranquilla"],
  'esAmericano' => true],
"Francia" => [
  'ciudades' => ["Paris", "Nantes", "Lyon"],
  'esAmericano' => false],
"Italia" => [
    'ciudades' => ["Roma", "Milan", "Venecia"],
    'esAmericano' => false],
"Alemania" => [
  'ciudades' => ["Munich", "Berlin", "Frankfurt"],
  'esAmericano' => false],
];

foreach ($ceu as $pais => $propiedades) {
  if ($propiedades['esAmericano']) {
    echo "Las ciudades de $pais son:";
    echo '<br/>';
    echo '<ul>';
      foreach ($propiedades['ciudades'] as $ciudad) {
        echo "<li> $ciudad</li>";
      }
      echo '</ul>';
}
}
echo '<br/>';
echo '<br/>';






echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
for($i=1; $i<=100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
  echo "fizz"."<br>";
}
  else if ($i % 5 == 0) {
    echo "buzz"."<br>";
  }
  else if ($i % 3 == 0) {
    echo "fizz buzz"."<br>";
  }
  else {
    echo $i."<br>";
  }
}


?>
