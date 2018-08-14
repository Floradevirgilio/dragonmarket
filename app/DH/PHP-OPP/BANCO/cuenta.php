<?php

//5. Crear una clase abstracta Cuenta con atributos: CBU, Balance, Fecha de último
//movimiento. Agregar setters y getters para obtener los datos de la cuenta. Agregar un
//constructor que permite inicializar el CBU.

abstract class Cuenta{
   private $cbu;
   private $balance;
   private $fechaMovimiento;

const BANELCO = "B";
const LINK = "L";
const CAJA = "C";

const CLASSIC = "class";
const GOLD = "gold";
const PLATINUM = "plat";
const BLACK = "black";

  function __construct($newCbu, $newBalance, $newFechaMovimiento){
     $this->setCbu($newCbu);
     $this->setBalance($newBalance);
     $this->setFechaMovimiento($newFechaMovimiento);
  }

  public function setCbu($newCbu){
    $this->nombre = $newCbu;
  }
  public function getCbu(){
    return $this->cbu;
  }

  public function setBalance($newBalance){
    $this->balance = $newBalance;
  }
  public function getBalance(){
    return $this->balance;
  }

  public function setFechaMovimiento($newFechaMovimiento){
    $this->fechaMovimiento = $newFechaMovimiento;
  }
  public function getFechaMovimiento(){
    return $this->fechaMovimiento;
  }


//Agregar un método abstracto para debitar cierto monto que reciba como parámetro el
//monto y desde donde se está haciendo la transacción (cajero Banelco, cajero Link,
//caja).

abstract public function debitar(int $monto, string $origen){
}

//Agregar otro método (no abstracto) que permita acreditar cierto monto (y
//programar su comportamiento). (Tener en cuenta que cada método debe, además,
//modificar la fecha de último movimiento).

public function acreditar(int $monto){
  $this->balance += $monto;
  $this->fechaMovimiento = date();
}


}



 ?>
