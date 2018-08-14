<?php require_once 'DbMySQL.php';

class CarroCabecera
{
  private $id;
  private $users_id;
  private $fecha;
  private $total;
  private $estado;

  public function __construct($id = null, $users_id, $fecha, $total, $estado)
  {
    $this->setId($id);
    $this->setUsers_id($users_id);
    $this->setFecha($fecha);
    $this->setTotal($total);
    $this->setEstado($estado);
  }

  // G E T T E R S
  public function getId()
  {
    return $this->id;
  }

  public function getUsers_id()
  {
    return $this->users_id;
  }

  public function getFecha()
  {
    return $this->fecha;
  }

  public function getTotal()
  {
    return $this->total;
  }

  public function getEstado()
  {
    return $this->estado;
  }

  // S E T T E R S
  public function setId($id)
  {
    $this->id = $id;
  }

  public function setUsers_id($users_id)
  {
    $this->users_id = $users_id;
  }

  public function setFecha($fecha)
  {
    $this->fecha = $fecha;
  }

  public function setTotal($total)
  {
    $this->total = $total;
  }

  public function setEstado($estado)
  {
    $this->estado = $estado;
  }
}
