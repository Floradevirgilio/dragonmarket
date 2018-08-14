<?php

include_once('operacionFactory.php');
///a. Atributo operacion ​(de tipo Operacion​)
//c. Atributo num2
//d. Método setNum1
//e. Método setNum2
//f. 3 constantes que representarán las 4 operaciones (‘suma’, ‘resta’,
//‘multiplicacion’, ‘division’).
//g. Por construcción, se recibe el identificador de la operación y los números a
//operar.
//h. Método makeOperacion​ que tomará el identificador de la operación y construirá
//el objeto Operación correspondiente.
//i. Método operar​ que devuelve el resultado.


class Calculadora extends OperacionFactory{

  private $num1;
  private $num2;



  public function __construct($operacionNueva, int $numero1, int $numero2){
    parent::setOperacion($operacionNueva);
    $this->setNum1($numero1);
    $this->setNum2($numero2);
  }


  public function setNum1($numero1){
    $this->num1=$numero1;
  }

  public function setNum2($numero2){
    $this->num2=$numero2;
  }

  public function operar(){
    
     return $this->operacion->operar($this->num1, $this->num2);
  }


}







 ?>
