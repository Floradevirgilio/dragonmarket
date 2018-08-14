<?php require_once 'DbMySQL.php'; ?>

<?php
class CarroTemporal
{
  private $id;
  private $productos_id;
  private $cantidad;
  private $users_id;
  private $creado;

  public function __construct($id = null, $productos_id, $cantidad, $users_id, $creado)
  {
    $this->setId($id);
    $this->setProductos_id($productos_id);
    $this->setCantidad($cantidad);
    $this->setUsers_id($users_id);
    $this->setCreado($creado);
  }

  // G E T T E R S
  public function getId()
  {
    return $this->id;
  }

   public function getProductos_id()
  {
    return $this->productos_id;
  }

  public function getCantidad()
  {
    return $this->cantidad;
  }

  public function getUsers_id()
  {
    return $this->users_id;
  }

  public function getCreado()
  {
    return $this->creado;
  }

  // S E T T E R S
  public function setId($id)
  {
    $this->id = $id;
  }

  public function setProductos_id($productos_id)
  {
    $this->productos_id = $productos_id;
  }

  public function setCantidad($cantidad)
  {
    $this->cantidad = $cantidad;
  }

  public function setUsers_id($users_id)
  {
    $this->users_id = $users_id;
  }

  public function setCreado($creado) {
    $this->creado = $creado;
  }
}
