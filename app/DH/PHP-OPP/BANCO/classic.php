<?php
include_once('cuenta.php');
//7. Crear 4 clases llamadas Classic, Gold, Platinum y Black. Todas “hijas” de la claseCuenta

class Classic extends Cuenta{

const

  //a. Debitar:
  //i. Classic: Si la transacción es desde un cajero Banelco, debe debitar un
  //5% mas. De Link un 10% mas. Desde caja no se agrega importe extra.

public function debitar(int $monto, $origen){
   switch ($origen) {
     case 'B':
       $this->balance = $this->balance - $monto*0.95;
       break;

    case 'L':
       $this->balance = $this->balance - $monto*0.90;
       break;

    case 'C':
      $this->balance = $this->balance - $monto;
        break;

   }
}

//b. Acreditar: Utiliza la cuenta que realiza su padre, pero debe modificar el importe a
//acreditar según el tipo de cuenta.
//i. El banco se queda con un 5% si es Classic

parent::acreditar(int $monto){
  $monto = $monto*0.95;
  parent::acreditar($monto);
}




}


 ?>
