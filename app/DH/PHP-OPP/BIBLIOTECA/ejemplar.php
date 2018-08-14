<?php
include_once('libro.php');


class Ejemplar{
  private $nroEdicion;
  private $ubicacion;
  private $libro;

  public function __construct(Integer $newNroEdicion, String $newUbicacion, Libro $newLibro){
    $this->nroEdicion = $nroEdicion;
    $this->ubicacion = $newUbicacion;
    $this->libro = $newLibro;
  }

}


 ?>
