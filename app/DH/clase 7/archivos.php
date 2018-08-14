<?php
    $archivo = file_exists('texto.txt');
    if ($archivo) {
        fopen('texto.txt', 'a+');
    } else {
        fopen('texto.txt', 'w+');
    }

    $texto = fopen('texto.txt', 'a+');
    for($i = 0; $i < 100; $i++) {
        fwrite($texto, 'Hola mundo! testing.'.PHP_EOL);
    }

    $texto;
    if($texto) {
        while(($linea = fgets($texto)) !==false){
        echo $linea;
        }
    }
    fclose($texto);

    $archivo1 = file_exists('texto2.txt');
    $texto1 = fopen('texto2.txt', 'a+');
    if ($archivo1) {
        fwrite($texto1, 'Hola nuevamente mundo! '.PHP_EOL);
    }
    fclose($texto1);

    $archivo1 = file_exists('texto2.txt');
    $texto1 = fopen('texto2.txt', 'a+');
    if ($archivo1) {
        fwrite($texto1, '¿Este texto pisa al anterior? '.PHP_EOL);
    }
    fclose($texto1);
