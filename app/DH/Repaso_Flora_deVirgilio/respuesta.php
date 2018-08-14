<?php
session_start();
include_once('paises.php');

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <h4>"Exitos <?php echo $_SESSION['nombre'] ?> ! Tu viaje a <?php echo $paises[$_SESSION['paises']] ?>  ha comenzado.
     Toda la información sera enviada a <?php echo $_SESSION['email'] ?>  ."</h4>

   </body>
 </html>
