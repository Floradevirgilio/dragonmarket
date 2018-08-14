<?php require_once 'DbMySQL.php';

class CarroDetalle
{
  private $id;
  private $carroCabecera_id;
  private $cantidad;
  private $descripcion;
  private $precio;

  public function __construct($id = null, $carroCabecera_id, $cantidad, $descripcion, $precio)
  {
    $this->setId($id);
    $this->setCarroCabecera_id($carroCabecera_id);
    $this->setCantidad($cantidad);
    $this->setDescripcion($descripcion);
    $this->setprecio($precio);
  }

  // G E T T E R S
  public function getId()
  {
    return $this->id;
  }

  public function getCarroCabecera_id()
  {
    return $this->carroCabecera_id;
  }

  public function getCantidad()
  {
    return $this->cantidad;
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function getPrecio()
  {
    return $this->precio;
  }

  // S E T T E R S
  public function setId($id)
  {
    $this->id = $id;
  }

  public function setCarroCabecera_id($carroCabecera_id)
  {
    $this->carroCabecera_id = $carroCabecera_id;
  }

  public function setCantidad($cantidad)
  {
    $this->cantidad = $cantidad;
  }

  public function setDescripcion($descripcion)
  {
    $this->descripcion = $descripcion;
  }

  public function setPrecio($precio)
  {
    $this->precio = $precio;
  }
}
