<?php

include_once('socio.php');


class SocioVIP extends Socio{
  private $cuota;

  public function __construct(String $nombre, String $apellido, Integer $id, Integer $cuota){
    parent::__construct(String $nombre, String $apellido, Integer $id);
    $this->cuota = $cuota;
    $this->cantMax = 15;
  }

}


 ?>
