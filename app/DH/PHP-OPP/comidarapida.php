<?php

class Ticket {
	private $items;

	public function agregarItem(Producto $item) {
		$this->items[] = $item;
	}

	public function facturar() {
		echo "<h1> Bienvenidos a McDigital </h1>";
		echo "<ul>";
		$total = 0;
		foreach ($this->items as $item) {
			$total += $item->getPrecio() * $item->getCantidad();
			echo "<li>";
			echo $item->facturate();
			echo "</li>";
		}
		echo "</ul>";
		echo "<h3>Total: $total</h3>";
	}
}

abstract class Producto {
	protected $cantidad;
	protected $descripcion;

	public function __construct($descripcion, $cantidad) {
		$this->cantidad = $cantidad;
		$this->descripcion = $descripcion;
	}

	public function getCantidad() {
		return $this->cantidad;
	}

	public function getDescripcion() {
		return $this->descripcion;
	}

	public abstract function getPrecio();
	public abstract function facturate();

}

class Simple extends Producto {
	private $precio;

	public function __construct($descripcion, $cantidad, $precio) {
		$this->descripcion = $descripcion;
		$this->cantidad = $cantidad;
		$this->precio = $precio;
	}

	public function getPrecio() {
		return $this->precio;
	}

	public function facturate() {
		echo $this->getCantidad() . " - " . $this->getDescripcion() . " - " . $this->getCantidad() * $this->getPrecio();
	}

	public function facturateSinPrecio() {
		echo $this->getCantidad() . " - " . $this->getDescripcion();
	}
}

class Combo extends Producto {
	private $items;

	public function getPrecio() {
		$total = 0;
		foreach ($this->items as $item) {
			$total += $item->getPrecio() * $item->getCantidad();
		}

		$total = $total - ($total / 100 * 20);
		return $total;
	}


	public function agregarItem(Producto $item) {
		$this->items[] = $item;
	}

	public function facturate() {
		echo $this->getCantidad() . " - " . $this->getDescripcion() . " - " . $this->getCantidad() * $this->getPrecio();

		echo "<ul>";
		foreach ($this->items as $item) {
			echo "<li>";
			echo $item->facturateSinPrecio();
			echo "</li>";
		}
		echo "</ul>";
	}

	public function facturateSinPrecio() {
		echo $this->getCantidad() . " - " . $this->getDescripcion();

		echo "<ul>";
		foreach ($this->items as $item) {
			echo "<li>";
			echo $item->facturateSinPrecio();
			echo "</li>";
		}
		echo "</ul>";
	}
}


$hamburguesa = new Simple("Hamb con queso", 2, 25);

$papitas = new Simple("Papitas chicas", 1, 20);

$bebida = new Simple("Coca triple 0", 1, 15);

$combo = new Combo("Combo comun", 1);
$combo->agregarItem($hamburguesa);
$combo->agregarItem($papitas);
$combo->agregarItem($bebida);


$ticket = new Ticket();

$ticket->agregarItem($combo);
$ticket->agregarItem($hamburguesa);


$megaCombo = new Combo("MegaCombo", 2);

$megaCombo->agregarItem($combo);
$megaCombo->agregarItem($papitas);
$megaCombo->agregarItem($hamburguesa);

$ticket->agregarItem($megaCombo);

$ticket->facturar();
