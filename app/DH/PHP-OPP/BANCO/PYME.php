<?php

//3. Agregar a las clases PYME y Multinacional los atributos y métodos que correspondan.
//(ej: CUIT, Razón social, etc). Agregar constructor y métodos getters y setters.


//- Nombre de la empresa
//- Forma jurídica
//- Fecha de constitución
//- Domicilio y teléfono
//- Socios y capital social
//- Sector de la actividad
//- Resumen del objeto del negocio

//CUIT y razón social

class PYME extends Cliente{
    private $cuit;
    private $razonSocial;

public function __construc($email, $pass, $newCuit, $newRazonSocial)
 parent::__construct($email, $pass);
 $this->setCuit($newCuit);
 $this->setRazonSocial($newRazonSocial);

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

}


 ?>
