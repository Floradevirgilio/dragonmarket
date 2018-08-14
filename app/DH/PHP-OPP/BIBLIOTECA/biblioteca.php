<?php
include_once('ejemplar.php');
include_once('libro.php');
include_once('socio.php');
include_once('sociosVIP.php');
include_once('prestamos.php');

//Parte J
//Por último se quiere agregar al modelo anterior una representación de la Biblioteca. Una biblioteca tiene
//un array de libros ([Libro]) , un array de socios ([Socio]) y un array de préstamos realizados ([Prestamo]) .
//1. Modificar el diagrama de clase para modelar a la clase Biblioteca.
//2. Implementar la clase creando los atributos necesarios.

class Biblioteca{
 private $libros;
 private $socios;
 private $prestamos;

 public function __construct(Libro $libros, Socio $socios, Prestamo $prestamos){
   $this->libros = [];
   $this->socios = [];
   $this->prestamos = [];
 }


//Parte K
//1. En la clase Biblioteca, crear un método que permita prestar un ejemplar del libro que el socio
//solicita. Este método no devuelve nada.
//○ prestar(Integer ISBN, Integer numeroDeIdentificacion )

public function prestar(Int $ISBN, Integer $id){
  //El método debe en primer lugar:
  //● Buscar al libro en el array de libros de la biblioteca usando el ISBN que me pasan por
  //parámetro. Almacenar al libro en una variable.

  
}

//● Buscar al socio en el array de socios usando el número de identificación que me pasan
//por parámetro y almacenarlo en una variable.
//Luego, deberá controlar:
//● Controlar si un libro tiene ejemplares disponibles.
//● Controlar si el socio tiene cupo disponible.
//En caso afirmativo, es decir si las condiciones anteriores son verdaderas, se debe:
//● Pedirle al libro buscado un ejemplar para prestar. (Usar los métodos ya definidos en
//Libro).
//● Registrar que el socio se llevó ese ejemplar. (Usar los métodos ya definidos en Socio).
//● Crear un objeto préstamo, cargarle la información necesaria y agregarlo al registro de
//préstamos de la Biblioteca.
//Imprimir por pantalla el resultado del préstamo.


}


 ?>
