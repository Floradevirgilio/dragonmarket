<?php
require_once '../../app/Http/Controllers/loader.php';
require_once '../../app/Http/Controllers/DbMySQL.php';
require_once '../../app/Http/Controllers/CarroTemporal.php';

$pageTitle = 'Detalle del Carro Temporal - Dragon Market - Equipos y Componentes para Gamers';

$id          = isset($_GET['id']) ? ($_GET['id']) : ''; // Si el GET['id'] esta seteado, paso a int el contenido
$id          = intval($id);
$descripcion = isset($_GET['descripcion']) ? $_GET['descripcion'] : '';
$cantidad    = isset($_GET['cantidad']) ? $_GET['cantidad'] : '';
$cantidad    = intval($cantidad);
$users_id    = $_SESSION['id'];

$ctrl = $db->actualizarCarroTemporal($id, $cantidad);

if($ctrl) {
  header('Location: carrito.php?action=cantidad_updated&id=' . $id . '&descripcion=' . $descripcion);
}
else {
  header('Location: carrito.php?action=failed&id=' . $id . '&descripcion=' . $descripcion);
}
?>
