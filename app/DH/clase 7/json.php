<?php


$categorias = [
          “id” => [1, 2, 3, 4, 5],
          “nombre” => ["Deportes”, "Historia", "Espectáculos", “Geografía”, “Arte”],
        ];

var_dump($categorias);
$json = json_encode($categorias);
json_decode($json, false);
echo '<pre>';
var_dump($json);

echo '<pre>';
print_r($json);
echo '</pre>';

 ?>
