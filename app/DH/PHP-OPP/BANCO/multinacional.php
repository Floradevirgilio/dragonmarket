<?php


//CUIT y razón social

class Multinacional extends Cliente{
  private $cuit;
  private $razonSocial;
  private $pais;

  public function __construc($email, $pass, $NewCuit, $newRazonSocial, $newPais){
     parent::__construct($email, $pass);
     $this->cuit = $newCuit;
     $this->razonSocial = $newRazonSocial;
     $this->pais = $newPais;
  }

  public function setCuit($newCuit){
    $this->cuit = $newCuit;
  }

  public function getCuit(){
   return $this->cuit;
  }

  public function setRazonSocial($newRazonSocial){
    $this->razonSocial = $newRazonSocial;
  }

  public function getRazonSocial(){
   return $this->razonSocial;
  }

  public function setPais($newPais){
    $this->pais = $newPais;
  }

  public function getPais(){
   return $this->pais;
  }

}


 ?>
