<?php
include_once('cuenta.php');
include_once('classic.php');
include_once('gold.php');
include_once('platinum.php');
include_once('black.php');

//Defino variables privadas para la clase Cliente

abstract class Cliente{

  Private $email;
  Private $pass;
  Private $cuenta;

  //9. Hacer los cambios necesarios en el Cliente, para que pueda tener una cuenta asociada.
  //(Concepto de composición). Agregar la asignación de la cuenta en el constructor.

//Creo una función constructora con sus parámetros necesarios

  public function __construct(string $email, $pass, Cuenta $cuenta){
    $this->email = $email;
    $this->pass = $pass;
    $this->cuenta = $cuenta;
  }

  //Creo funciones públicas para setear el valor pasado como parámetro al ejecutar la función constructora, como valor de la propiedad del objeto instanciado


  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setPass($pass){
    $this->pass = $pass;
  }
  public function getPass(){
    return $this->pass;
  }

  //10. Una vez por mes, el banco debe cobrarle a cada cliente por los servicios prestados.
  //Cada Cliente deberá tener un método que permita cobrar los servicios:
  //a. Si el cliente tiene cuenta Classic, el banco cobra un monto fijo de $100.
  //b. Si el cliente tiene cuenta Gold, el banco cobra $10 por cada letra del apellido del
  //cliente o $5 por cada letra de la razón social.
  //c. Si el cliente tiene una cuenta Platinum el banco cobra un 10% del total del
  //balance de la cuenta.
  //d. Si el cliente tiene una cuenta Black, el banco cobra $500, más $100 multiplicado
  //por el número de día de la semana en la que se hizo la última transacción.
  //        $date = '2016/09/28';
  //        $weekday = date('l', strtotime($date))

private function cobrarServicios($cuenta){
  switch ($cuenta) {
    case 'clas':

      break;

    case 'gold':
        // code...
      break;

    case 'plat':
        // code...
      break;

    case 'black':
        // code...
      break;

  }
}


  }
