<?php

class Multiplicacion extends Suma {
  public function operar($num1, $num2){
      //$contador = 0;
      ///$suma = new Suma();
      ///for ($i=0; $i < $num2 ; $i++) {
      //  $contador = $suma->operar($contador, $num1);
      $contador = 0;
      for ($i=0; $i < $num2 ; $i++) {
        $contador = $contador + $num1;
    }
    return $contador;
  }
}




 ?>
