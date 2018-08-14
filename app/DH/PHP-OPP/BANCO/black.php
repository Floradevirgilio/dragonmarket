<?php
include_once('cuenta.php');
//7. Crear 4 clases llamadas Classic, Gold, Platinum y Black. Todas “hijas” de la claseCuenta

class Black extends Cuenta{

  public function debitar(int $monto, $origen){
    $this->balance = $this->balance - $monto;
  }


// iv. 0% para Black o 4% para montos superiores a 1.000.000

parent::acreditar(int $monto){
  $monto = $monto > 1000000 ? $monto*0.96 : $monto;
  parent::acreditar($monto);

}


}
