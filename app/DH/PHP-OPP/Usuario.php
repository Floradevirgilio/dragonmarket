<?php


class Usuario {

  private $nombre;
  private $email;
  private $contraseña;

/*Modificar el constructor para que utilice los métodos setMail y setPass, utilizando así
las validaciones ya armadas.*/

  public function __construct(string $nom, string $ema, $con){
    $this->nombre=$nom;
    $this->email=setMail($ema);
    $this->contraseña=setPass($con);
  }

  //9. Crear un método llamado “saludar” que imprima “Hola NOMBRE” en donde el
//nombre debe ser el nombre del usuario

  public function saludar(){
    echo "Hola ".$this->nombre;
  }

/*11. Agregar los siguientes métodos (que permitan consultar y modificar los atributos):
a. getNombre
b. getMail
c. getPass
d. setNombre
e. setMail
f. setPass*/

public function getNombre(){
  echo $this->nombre;
}

public function getMail(){
  echo $this->email;
}

public function getPass(){
  echo $this->contraseña;
}


/*Al setNombre y setMail asegurémonos que lo ingresado pueda ser solo String.*/

public function setNombre(string $nuevoNombre){
   $this->nombre = string $nuevoNombre;
}


/*14. Agregar una validación en setMail para que el valor sea un mail.*/
public function setMail(string $nuevoEmail){
   $this->email = if (filter_var($nuevoEmail, FILTER_VALIDATE_EMAIL));
}


/*2. Agregar una validación en setPass para que el valor sean por lo menos 3 dígitos.
*/
public function setPass(string $nuevaPass){
   $this->contraseña = encriptarPass(if(strlen($nuevaPass) >= 3));
}

/*Agregaremos el método privado encriptarPass que dado un string devuelve su
versión hasheada​*/
private function encriptarPass(string $pass){
  $this->contraseña = string password_hash($pass, PASSWORD_DEFAULT);
}





}



 ?>
