<?php
include_once('Usuario.php');

echo '<pre>';
$usuario = new Usuario("Juan", "j@juan.com", "1234pepe");
var_dump($usuario);

$usu1 = new Usuario("Pablo", "p@pablo.com", "1234pepe");
var_dump($usu1);


echo '<pre>';

echo $usu1->saludar();

/*Probar llamar a estos últimos 3 métodos creados desde alguna de las instancias
creadas. */


 ?>
