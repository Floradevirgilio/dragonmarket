<?php

//Una de las maneras de gestionar una conexión a una base de datos en PHP es a través
//de la clase PDO​. En su constructor, puede recibir 4 parámetros.
//● DSN. Obligatorio. Es un string que indica datos de la conexión.
//● Username. Optativo. Un string que indica nombre de usuario con el que
//tratará de conectarse.
//● Password. Optativo.Un string que indica la contraseña con la que tratará
//de conectarse.
//● Options. Optativo. Es un array que puede recibir diversas de la conexión
//en un array asociativo. Importante para manejo de errores.
//Dado esto, una conexión tendría la siguiente sintaxis:
//$db = new PDO($dsn, $username, $password, $options);
//El DSN es un string que podría tener por ejemplo la siguiente información
//'mysql:host=localhost;dbname=mi_bd;port=3306'


//1. Generar una conexión a la última base de datos utilizada durante las clases de
//MySQL aclarando en el DSN únicamente host​ y dbname​.

// $dsn = 'mysql:host=127.0.0.1;dbname=movies_db-new;port=3306';
// $db_user = 'root';
// $db_pass = 'root';
// $opt = [ PDO::ATTR_ERRMODE
//  => PDO::ERRMODE_EXCEPTION ];
// $db = new PDO($dsn, $db_user, $db_pass, $opt);
//
// var_dump($db);
echo 'skhfdgkshdf..';

 ?>
