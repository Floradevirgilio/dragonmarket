  <?php
require_once '../../app/Http/Controllers/loader.php';
require_once '../../app/Http/Controllers/DbMySQL.php';
require_once '../../app/Http/Controllers/CarroTemporal.php';
require_once '../../app/Http/Controllers/CarroCabecera.php';
require_once '../../app/Http/Controllers/CarroDetalle.php';

$stmt = $db->borrarCarroTemporalUser($_GET['cli']);

$pageTitle = 'Pagar - Dragon Market - Equipos y Componentes para Gamers';

include_once 'componentes/head.php';
include_once 'componentes/navbar.php';
?>

<div id="wrap">
  <div id="main" class="container">
    <div class="container">
      <div class="row justify-content-center" style="margin-top: 50px;">
        <h2>Confirmación de Pago</h2>
      </div>

<?php
$action="pagar"; // Ahora lo hardcodeo, después lo muevo por GET
// Muestro mensaje de la acción
if ($action == 'pagar') {
    echo "<div class='' style='margin-top: 75px;'>";
      echo "<div class='alert alert-success'>";
        echo "<div class='row justify-content-center'>";
          echo "<h4><strong> Recibimos tu pago, muchas gracias !!</strong></h4>";
        echo "</div>";
        echo "<div class='row justify-content-center'>";
          echo "<h4><strong> En breve nos contactaremos para coordinar la entrega</strong></h4>";
        echo "</div>";
      echo "</div>";
    echo "</div>";
} ?>

      <div class="row justify-content-center" style="margin-top: 75px;">
          <a class="btn btn-primary" href="home.php">Volver</a>
      </div>


    </div>
  </div>
</div>


<?php include_once 'componentes/footer.php'; ?>
