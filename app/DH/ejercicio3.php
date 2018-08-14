<?php

$variable01 = true;

$variable02 = false;

$variable03 = 0;

$variable04 = 1;

$variable05 = 6;

$variable06 = '';

$variable07 = "3";

$variable08 = "true";

$variable09 = 'false';

$variable10 = null;

function tipoDato($varN)
{
    if ( $varN == true )
    {
        echo 'el valor' . $varN . 'es verdadero.';
    }
    else
    {
        echo 'el valor' . $varN . 'es falso.';
    }
}

tipoDato($variable10);


$animales = [perro, gato, elefante, chancho, pájaro];
var_dump($animales);
$animales[] = "colibrí";
$animales[] = "cocodrilo";
var_dump($animales);
echo "Me gustan los animales: $animales[0], $animales[1], $animales[2], $animales[3], $animales[4], $animales[5], $animales[6], $animales[7].";
$animales[0] = "tiburón";
var_dump($animales);
echo '<br/>';
$animales[100] = "pato";
var_dump($animales);
echo '<br/>';
$animales[16] = "cisne";
var_dump($animales);
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
$auto = [];
$auto["Marca"] = "Volskwagen";
$auto["Modelo"] = [Gol, Voyage, Golf];
$auto["Color"] = [Negro, Blanco, Azul, Rojo];
$auto["Año"] = [2005, 2007, 2016, 2018];
$auto["Patente"] = [CMK209, AIE304, CIS480];
var_dump($auto);
echo '<br/>';
echo '<br/>';
echo '<br/>';
$auto[0] = "Roberto Perez";
var_dump($auto);


?>
