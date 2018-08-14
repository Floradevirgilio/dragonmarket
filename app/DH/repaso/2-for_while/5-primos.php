<?php
/*
 * 1) Armar una función que, dado un número recibido como parámetro,
 * calcule y retorne si es o no un número primo.
 * (Nota:
 *      Un número primo es aquel que solo es divisible por si mismo y por 1
 *      EJ: 5 es primo, ya que sólo se lo puede dividir por 5 y por 1.
 *          6 NO es primo, porque es divisible por 2 y por 3.
 * )
 *
 * 2) Llamar a la función con diferentes números y verificar el resultado.
 *
 * 3) Armar una nueva función que haga lo mismo pero utilizando otra repetitiva:
 * Si se uso FOR, usar WHILE. Si se uso WHILE, usar FOR.
 */


function esPrimo($numero){
    if ($numero % $numero == 0 && $numero % 1 == 0) {
      return $numero." es un número primo";
    }

}

function esPrimo1($numero){
    $cont = 0;
    for($i = 2;$i <= $numero; $i++)
    {
    if($numero % $i==0)
    {

        if($cont++>1)
            return $numero." no es un número primo";
    }
}
return $numero." es un número primo";

}




echo esPrimo(5);
echo "<br>";
echo esPrimo1(5);
echo "<br>";
echo esPrimo2(5);
echo "<br>";
