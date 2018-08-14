<?php
include_once('ejemplar.php');

class Libro{
  private $nombre;
  private $autor;
  private $ISBN;
  private $ejemplares;

public function __construct(String $nombre, String $autor, Integer $ISBN) {
  $this->nombre = $nombre;
  $this->autor = $autor;
  $this->ISBN = $ISBN;
  $this->ejemplares = [];
}

//Crear un método en la clase Libro que permita agregar un nuevo ejemplar al array de ejemplares.
public function agregarNuevoEjemplar(Ejemplar $ejemplar){
 $this->ejemplares = array_push($ejemplares, $ejemplar);
}

//Crear un método en la clase Libro que permita consultar si un libro tiene ejemplares disponibles.
//Este método devuelve true si tiene disponible ejemplares o false en caso contrario.
// tieneEjemplaresDisponibles()

public function tieneEjemplaresDisponibles(){
  if (count($this->ejemplares) === 0) {
    return false;
  } else {
    return true;
  }
}

//Crear un método en la clase Libro que permita prestar un ejemplar de un libro. Directamente, se
//tiene que eliminar del array de ejemplares el primer ejemplar y devolver dicho ejemplar.
// prestarEjemplar()


//=== estricto

public function prestarEjemplar(){
  if(tieneEjemplaresDisponibles() === true){
  $this->ejemplares = array_dif($ejemplares, $ejemplares[0]);
}
}


//Crear un método en la clase Libro que permita registrar el reingreso de un ejemplar que fue
//prestado a un socio. Este método debe agregar al array de ejemplares el ejemplar que recibe por
//parámetro.
//○ reingresarEjemplar(Ejemplar unEjemplar)

public function reingresarEjemplar(Ejemplar $unEjemplar){
  $this->ejemplares = array_push($ejemplares, $unEjemplar);
}
}


 ?>
