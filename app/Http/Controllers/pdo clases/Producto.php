<?php

class Producto
{
  public $id;
  public $descripcion;
  public $lineas_id;
  public $precio;
  public $stock;
  public $activo;

  public function __construct($id, $descripcion, $lineas_id, $precio, $stock, $activo)
  {
    $this->id          = $this->setId($id);
    $this->descripcion = $this->setDescripcion($descripcion);
    $this->lineas_id   = $this->setLineasId($lineas_id);
    $this->precio      = $this->setPrecio($precio);
    $this->stock       = $this->setStock($stock);
    $this->activo      = $this->setActivo($activo);
  }

  // G E T T E R S
  public function getId()
  {
    return $this->id;
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function getLineasId()
  {
    return $this->lineas_id;
  }

  public function getPrecio()
  {
    return $this->precio;
  }

  public function getStock()
  {
    return $this->stock;
  }

  public function getActivo()
  {
    return $this->activo;
  }

  // S E T T E R S
  public function setId($id)
  {
    $this->id = $id;
  }

  public function setDescripcion($descripcion)
  {
    $this->descripcion = $descripcion;
  }

  public function setLineasId($lineas_id)
  {
    $this->lineas_id = $lineas_id;
  }

  public function setPrecio($precio)
  {
    $this->precio = $precio;
  }

  public function setStock($stock)
  {
    $this->stock = $stock;
  }

  public function setActivo($activo)
  {
    $this->activo = $activo;
  }

  // FUNCIONES CON LA DB
  function leerLineasProductos($activo)
  {
    $query = $this->conexion->prepare('SELECT nombre, id
                                        FROM lineas
                                        WHERE activo = :activo
                                        ORDER BY nombre');

    $query->bindValue(':activo', $activo);
    $query->execute();

    $array = $query->fetchAll(PDO::FETCH_ASSOC);
    return $array;
  }

  function mostrarProductosLinea($id, $activo)
  {
    $query = $this->conexion->prepare('SELECT id, descripcion, precio FROM productos
                                        WHERE lineas_id = :id AND activo = :activo
                                        ORDER BY descripcion');
    $query->bindValue(':id', $id);
    $query->bindValue(':activo', $activo);
    $query->execute();

    $array = $query->fetchAll(PDO::FETCH_ASSOC);
    return $array;
  }

  function mostrarProductosTexto($texto, $activo)
  {
    $query = $this->conexion->prepare('SELECT id, descripcion, precio FROM productos
                                        WHERE descripcion LIKE :texto AND activo = :activo
                                        ORDER BY descripcion');
    $query->bindValue(':texto', $texto);
    $query->bindValue(':activo', $activo);
    $query->execute();

    $array = $query->fetchAll(PDO::FETCH_ASSOC);
    return $array;
  }
}
