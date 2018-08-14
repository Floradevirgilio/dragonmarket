<?php
//En cada clase se crean funciones con el mismo nombre que las de la base de datos
//En producto, en usuario, en compra se valida. No se vuelve a validar en base de datos por ahora
//cada clase instancia sus objetos en sus controladores, desp de recibir los datos array de la db
//Roma actualiza las tablas con los campos que faltan, asi que hay que hacer un update con los alter table
//que va a subir al repo, con la tabla version 6

//Estan los métodos a 'coordinar' entre la base de datos y las clases que vamos a trabajar en:
// ControllerProducto
// ControllerUsuario
// Compra

//Por el momento, no cambiar los parametros que reciben los métodos, ya que son los que necesita la base de datos

require_once('Estado.php');
require_once('Direccion.php');
require_once('ProductoCompra.php');
require_once('MedioPago.php');
require_once('BdMySQL.php');
require_once('Reserva');
require_once('CompraEnEspera.php');
require_once('CompraConfirmada');

class Compra {
  private $item = [];
  private $precioTotal;
  private $saldo;
  private $medioPago;
  private $estado;
  private $fechaCarga = null;
  private $fecha = null;
  private $direccion;

poner atributo tabla/campos(fillable) -> PASAR EN CONTROLLER COMPRAAAAAAAAAAAASDLJFZSLJFZSLD
  private $db;
  private $id;
  private $itemsCompra = [];


  public function __construct(productoCompra $item, int $saldo, MedioPago $medioPago, Estado $estado, Direccion $direccion){
    $this->item[] = $item;  //new ProductoCompra();
    //$this->precioTotal = getPrecio(productoCompra $item);
    $this->saldo = $saldo;
    $this->medioPago = $medioPago;
    $this->estado = $estado;
    //$this->fechaCarga = $fechaCarga;
    //$this->fecha = $fecha;
    $this->direccion = $direccion;

    $this->db = new BdMySQL();
    $this->id = $id;
    $this->itemsCompra = new Compra(productoCompra $item, int $saldo, MedioPago $medioPago, Estado $estado, String $fechaCarga, Date $fecha, Direccion $direccion);


  }


///// getters y setters
  public function getItem(){
    $items = $this->item[]; //foreach?
    foreach($items as $item){
      return $item;
    }
  }

  // public function setItem(productoCompra $item){
  //   $this->item[] = $item;
  // }

  public function getPrecioTotal(){
    return $this->precioTotal;
  }

  public function setPrecioTotal(){
    return $this->precioTotal;
  }

  public function getSaldo(){
    return $this->saldo;
  }

  public function setSaldo(Int $saldo){
    $this->saldo = $saldo;
  }

  public function getMedioPago(){
    return $this->medioPago;
  }

  public function setMedioPago(MedioPago $medioPago){
    $this->medioPago = $medioPago;
  }

  public function getEstado(){
    return $this->estado;
  }

  public function setEstado(Estado $estado){
    $this->Estado::guardarEstado($estado);
  }

  public function getDireccion(){
    return $this->direccion;
  }

  public function setDireccion(Direccion $direccion){
    $this->direccion = $direccion;
  }

  public function getId(){
    return $this->id;
  }


  public function getItemsCompra(){
    $itemsCompra = $this->itemsCompra[];
    foreach ($itemsCompra as $itemCompra) {
      return $itemCompra;
    }

  }




//////// Métodos


  public function guardarCarrito(){
   $this->estado = new CompraEnEspera();

   $this->cambiarEstado("En Espera");

  }

  private function cambiarEstado(Estado $estado){
    //no debería llamar a guardarEstado de estado?
   $this->setEstado(Estado $estado);
  }

  public function reservar(String $nombreMedioPago, int $importe){
    //no es crear un objeto tipo reserva?
   $this->medioPago = new MedioPago(String $nombreMedioPago);
   $this->estado = new Reserva(MedioPago $medioPago, int $importe);

   $this->setMedioPago(MedioPago $medioPago);
   $this->cambiarEstado("Reserva");
  }

  public function calcularTotal(){
    //item = sumar precioTotal
    //debería llamar al getPrecioTotal de cada Compra del array item
    $compras = $this->item[];
    //$compras = $this->getItem();
    foreach($compras as $compra){
    $items += $compra['precio']; //de cada compra getPrecio y sumar
    }
    return $items;
  }


  public function agregarProducto(Producto $producto, Int $cantidad, Double $precio){
    //new producto se hace a partir de productoCompra que es el atributo item de compra
    $this->itemsCompra[] = new ProductoCompra(Producto $producto, Int $cantidad, Double $precio);

  }

  public function sacarProducto(ProductoCompra $productoCompra){
    //if "este producto compra del parámetro" es === a "un producto compra" del objeto "compra"
    //entonces lo saco
  }

  public function facturar(){
   $this->estado = new CompraConfirmada();
   $this->calcularTotal(); //y efectivizar el pago

  }


  //INSERTAR -> key y value / id / borrar->tabla y id / buscar -> array con filtros elegidos EL key tiene que ser texto
  public function insertarCompra(vercualesmiparametro){
    //usa adentro la funcion del mismo nombre (de la Base de datos)
    //insertarCompra(Compra $compra) <- esta es la función que llamo, que es la de la base de datos
  $compras = $this->getItemsCompra();
  $this->db->insertarCompra($compras);//hacer un foreach para insertar cada item del array de compras

  //foreach ($compras as $compra => $value) {
  //$query = $this->db->prepare("INSERT INTO armatuevento.compras (precio_total, saldo, reserva, medio_pago_id, estado, fecha_compra, fecha_evento, direccion_id, usuario_id) VALUES ( :precio_total, :saldo, :reserva, :medio_pago_id, :estado, :fecha_compra, :fecha_evento, :direccion_id, :usuario_id)");

  $items = $this->getItem();
  foreach ($items as $item => $value) {
  $query = $this->db->prepare("INSERT INTO armatuevento.producto_compra (id, descripcion, producto_id, precio, compra_id) VALUES ( :id, :descripcion, :producto_id, :precio, :compra_id)");

    objeto compra tiene lista de itemsCompra que son objetos compra, tomar esos e
  	insertar en tablar compra el objeto Compra
  	en tabla productoCompra insertarlo
  }

  //LISTAR
  public function listarCompras(Estado $estado = false){
  	//admin
    //usa adentro la funcion del mismo nombre (de la Base de datos)
  $estadoBuscado = $this->getEstado();
  if($estadoBuscado === $estado){
    return $this->getItemsCompra();
  }
  //esto es lo que devuelvo a base de datos= $estado = false
  }

  public function listarCompras(Estado $estado = false){
  	//users
    //usa adentro la funcion del mismo nombre (de la Base de datos)

   //esto es lo que devuelvo a base de datos = $id_usuario, Estado $estado = false
  }

  //BORRAR
  public function borrarCompra(Compra $compra){
  	//users
  	poner 0 al campo activo
    //usa adentro la funcion del mismo nombre (de la Base de datos)
  }

  public function borrarDireccionCompra(Direccion $direccion, Compra $compra){
  	//users
    //usa adentro la funcion del mismo nombre (de la Base de datos)
  	ver tema FK de los productos, habria que reemplazarlo
  	poner 0 al campo activo
  }
  //BUSCAR POR ID
  public function traerDireccion($id){
    //usa adentro la funcion del mismo nombre (de la Base de datos)
    //retorna objeto
    $idBuscada = $this->getId();

    if($idBuscada === $id){
      return $this->getDireccion();
    }
  }

  public function traerCompra(Compra $compra){
    //usa adentro la funcion del mismo nombre (de la Base de datos)
    //retorna objeto
   //esto es lo que devuelvo a base de datos = array: campo, valor
   $comprasListadas = $this->getItemsCompra();
   foreach ($comprasListadas as $compraLista) {
    if($compraLista === $compra){
    return $compra;  }
   }
  }

  //MODIFICAR
  public function modificarCompra(Compra $compra, $campoValor){
    //usa adentro la funcion del mismo nombre (de la Base de datos)
 //esto es lo que devuelvo a base de datos = array: campo, valor

  }

}
