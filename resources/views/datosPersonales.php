<?php
require_once '../../app/Http/Controllers/loader.php';

$pageTitle = 'Datos Personales - Dragon Market - Equipos y Componentes para Gamers';

include_once 'componentes/head.php';
include_once 'componentes/navbar.php' ;

$user     = $db->buscarUsuarioPorId($_SESSION['id']); // Leo el usario por id y traigo totdos sus datos
$id       = $user->getId();
$nombre   = $user->getNombre();
$apellido = $user->getApellido();
$email    = $user->getEmail();
?>

<div id="wrap">
  <div id="main" class="container">
    <div class="container">
      <div class="row justify-content-center">
        <div class="column col-sm-12 col-md-6" style="margin-top: 50px;">
          <div class="row justify-content-center">
            <h3>Mis Datos Personales</h3>
          </div>

          <div class="form-group">
            <label for="nombre"><strong>Nombre</strong></label>
            <input disabled type="text"
            class="form-control"
            id="nombre"
            name="nombre"
            value="<?php echo $nombre ?>">
          </div>

          <div class="form-group">
            <label for="apellido"><strong>Apellido</strong></label>
            <input disabled type="text"
            class="form-control"
            id="apellido"
            name="apellido"
            value="<?php echo $apellido ?>">
          </div>

          <div class="form-group">
            <label for="email"><strong>Email</strong></label>
            <input disabled type="text"
            class="form-control"
            id="email"
            name="email"
            value="<?php echo $email ?>">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once 'componentes/footer.php'; ?>
