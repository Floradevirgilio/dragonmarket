<?php
include_once('ejemplar.php');
include_once('libro.php');
include_once('socio.php');
include_once('sociosVIP.php');

//Se quiere modelar una representación de un objeto préstamo. Préstamo representa el préstamo de un
//ejemplar a un socio. En principio, posee un ejemplar (Ejemplar) , un socio (Socio) y una fecha (Date) . Los
//préstamos siempre vencen a los 5 días con lo que no es necesario registrar la fecha de finalización del
//préstamo.
//   1. Modificar el diagrama de clase y modelar a la clase Préstamo.
//   2. Implementar la clase creando los atributos necesarios.
//   3. Crear un constructor que tome como parámetro al socio y al ejemplar y que construya un
//   préstamo con la fecha de día.

class Prestamo{
  private $ejemplar;
  private $socio;
  private $fecha;

  public function __construct(Ejemplar $ejemplar, Socio $socio){
    $this->ejemplar = $ejemplar;
    $this->socio = $socio;
    $nuevafecha = strtotime('+5 day', strtotime(date('Y-m-j')));
    $this->fecha = date('Y-m-j', $nuevafecha);
  }

}



 ?>
