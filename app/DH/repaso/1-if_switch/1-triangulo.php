<?php
/*
 * 1) Armar una función que, dado 3 numeros ($l1, $l2, $l3) recibidos por parámetro,
 * indique si formarán un triangulo equilatero, isosceles o escaleno.
 * (Nota:
 *      - Equilatero: Todos sus lados son iguales.
 *      - Isosceles: Dos de sus lados son iguales.
 *      - Escaleno: Todos sus lados son diferentes.
 * )
 *
 * 2) Llamar a la función con diferentes lados y verificar el resultado.
 *
 * 3) Armar un formulario que permita que un usuario ingresar los 3 lados
 * y usar esos datos para llamar a la función y mostrar el resultado.
 */
 function triangulo($l1, $l2, $l3) {
   if($l1 == $l2 && $l1 == $l3) {
     return "Es un Equilátero";
   } if ($l1 == $l2 || $l1 == $l3 || $l2 == $l3) {
     return  "Es un Isósceles";
   } else {
       return  "Es un Escaleno";
   }

 }

 echo triangulo(2, 3, 5);
 echo "<br>";
 echo triangulo(2, 2, 5);
 echo "<br>";
 echo triangulo(2, 2, 2);
 echo "<br>";




?>
