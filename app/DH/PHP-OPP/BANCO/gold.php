<?php
include_once('cuenta.php');
//7. Crear 4 clases llamadas Classic, Gold, Platinum y Black. Todas “hijas” de la claseCuenta

class Gold extends Cuenta{

  //ii. Gold: Desde Banelco y Caja no se agrega importe extra. Desde Link un
 //5% mas.


 public function debitar(int $monto, $origen){
    switch ($origen) {
      case 'B':
        $this->balance = $this->balance - $monto;
        break;

     case 'L':
        $this->balance = $this->balance - $monto*0.95;
        break;

     case 'C':
       $this->balance = $this->balance - $monto;
         break;

    }
 }

//ii. Se queda con un 3% si es Gold, salvo que se esté acreditando 25.000 o más.

 public function acreditar(int $monto) {
   $monto = $monto < 25000 ? $monto*0.97 : $monto;
   //$this->monto < 25000 ? ($monto - $monto*3/100) : $monto);
   parent::acreditar($monto);
 }


}
