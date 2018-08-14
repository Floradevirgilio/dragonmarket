<?php
require_once ('Usuario.php');

abstract class DB
{
  // En cualquier base de datos que usemos,
  // vamos a aplicar estos 3 metodos
  // porque nos sirven para armar nuestra logica
  // de login y sesion con la clase Auth

  public abstract function guardarUsuario(Usuario $usuario);

  public abstract function buscamePorEmail($email);

  public abstract function traeTodaLaBase();

  // public function guardarProducto() { }
  // public function traerProducto() { }
  // public function modificarStock() { }

  // clase abstracta, cada hijo usa estas
  // funciones con un contenido/código diferente
  // Si mañana nos llega una base de datos que no sea MySQL,
  // ya tenemos estos 3 metodos listos para interactuar.
}
