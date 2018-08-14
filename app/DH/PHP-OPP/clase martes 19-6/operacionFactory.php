<?php
//5. Crear una clase OperacionFactory​ que tenga un método make​, el cual recibe un
//identificador de operacion y construya el objecto Operacion​ correspondiente.
//Reemplazar el código del método makeOperacion​ por el uso de esta clase.

class OperacionFactory{
  protected $operacion;
  protected $operador;

  const SUMA = '++++';
  const RESTA = '----';
  const DIVI = '////';
  const MULTI = '****';

  public function make($identificador){
    switch ($identificador) {
      case '++++':
        $this->operacion = new Suma();
        break;
      case '----':
        $this->operacion = new Resta();
        break;
      case '////':
        $this->operacion = new Division();
        break;
      case '****':
        $this->operacion = new Multiplicacion();
        break;
  }
}

  public function setOperacion($nuevaOperacion){
    $this->operador = $nuevaOperacion;
    $this->make($nuevaOperacion);
  }
}
