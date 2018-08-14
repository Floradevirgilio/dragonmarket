<?php
include_once('cuenta.php');
//7. Crear 4 clases llamadas Classic, Gold, Platinum y Black. Todas “hijas” de la claseCuenta

class Platinum extends Cuenta{

//Platinum: 5% desde cualquier medio, a menos que la cuenta tenga un
//balance de 5.000 o más.

public function debitar(int $monto, $origen){
    $this->balance >= 5000 ? $this->balance - $monto : $this->balance - $monto*0.95;

}

}
