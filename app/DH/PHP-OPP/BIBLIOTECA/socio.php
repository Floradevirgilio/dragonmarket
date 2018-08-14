<?php
include_once('ejemplar.php');
include_once('libro.php');

class Socio {
  private $nombre;
  private $apellido;
  private $id;
  private $librosRetirados;
  private $cantMax;

  public function __construct(String $nombre, String $apellido, Integer $id){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->id = $id;
    $this->librosRetirados = [];
    $this->cantMax = 3;
  }

//1. Crear un método en la clase Socio que permita consultar si un socio tiene cupo disponible para
//llevarse un libro. Este método devuelve true si tiene cupo o false si no tiene cupo.
//○ tieneCupoDisponible()
//Atención: Recordar que a un socio clásico sólo se le prestan 3 ejemplares mientras que a un
//socio VIP se le prestan hasta 15 libros.

public function tieneCupoDisponible(String $nombre){
  if(count($this->librosRetirados) === $this->cantMax){
    return false;
  }

}

//2. Crear un método en la clase Socio que permita al socio pedir prestado un ejemplar. Es decir, el
//método deberá agregar un ejemplar al array de ejemplares prestados del socio.
//○ tomarPrestadoUnEjemplar(Ejemplar unEjemplar)
public function tomarPrestadoUnEjemplar(Ejemplar $ejemplar){
 $this->librosRetirados = array_push($librosRetirados, $ejemplar);
}


//Crear un método en la clase Socio que permita devolver un ejemplar. Es decir, el método deberá
//eliminar del array de ejemplares prestados el ejemplar prestado, ya que el socio hizo la
//devolución.
// devolverUnEjemplar( Ejemplar unEjemplar)
public function devolverUnEjemplar(Ejemplar $ejemplar){
  if(in_array(Ejemplar $ejemplar, $this->librosRetirados)){
    $this->librosRetirados = array_dif($librosRetirados, $ejemplar);
  }
}


}

 ?>
