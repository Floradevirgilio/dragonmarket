<?php
require_once '../../app/Http/Controllers/loader.php';
require_once '../../app/Http/Controllers/DbMySQL.php';

$id          = isset($_GET['id']) ? $_GET['id'] : ''; // Traigo el producto
$descripcion = isset($_GET['descripcion']) ? $_GET['descripcion'] : '';
$users_id    = $_SESSION['id'];

$ctrl = $db->borrarItemCarroTemporal($id);


if($ctrl) { // Si $ctrl es true, la baja es exitosa
  // Redirijo y le aviso al usuario
  // que el artículo fue removido
  header('Location: carrito.php?action=removed&id=' . $id . '&descripcion=' . $descripcion);
}
else {
  // Si fallara el proceso
  // redirijo y aviso al usuario que falló
  header('Location: carrito.php?action=failed&id=' . $id . '&descripcion=' . $descripcion);
}
?>
