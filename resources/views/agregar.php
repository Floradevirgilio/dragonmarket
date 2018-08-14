<?php require_once '../../app/Http/Controllers/loader.php'; ?>
<?php require_once '../../app/Http/Controllers/DbMySQL.php'; ?>

<?php
if (!$auth->loginControl()) {
    header('location: acceso.php');
    exit;
}
?>

<?php

// Detalles del producto
$id          = isset($_GET['id']) ?  $_GET['id'] : die;
$descripcion = isset($_GET['descripcion']) ?  $_GET['descripcion'] : die;
$cantidad    = isset($_GET['cantidad']) ?  $_GET['cantidad'] : die;
$users_id    = $_SESSION['id'];
$creado      = date('Y-m-d H:i:s');

// Query p/ INSERT
$carroTemporal  = new CarroTemporal(null, $id, $cantidad, $users_id, $creado);

$ctrl = $db->guardarCarroTemporal($carroTemporal);


if ($ctrl) {
    // Aviso proceso correcto
    header('Location: home.php?action=added&id=' . $id . '&descripcion=' . $descripcion);
} else {
    // Aviso fallo de proceso
    header('Location: home.php?action=failed&id=' . $id . '&descripcion=' . $descripcion);
}

// Cierro proceso Alta

include_once 'componentes/footer.php';
