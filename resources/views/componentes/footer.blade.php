<footer>
  <div class="cajasFooter col-sm-12 col-md-4">
    <div>
      <div class="row">
        <i class="fas fa-envelope" style="font-size: 1em; margin-right: 10px"></i><h6>ventas@dragonmarket.com.ar</h6>
      </div>
      <div class="row">
        <i class="fas fa-phone" style="font-size: 1em; margin-right: 10px"></i><h6>(011) 4666-3333</h6>
      </div>
      <div class="row">
        <i class="fas fa-map-marker-alt" style="font-size: 1em; margin-right: 10px"></i><h6>Av. Elcano 2121 - C.A.B.A.</h6>
      </div>
    </div>
  </div>

  <div class="cajasFooter col-sm-12 col-md-4">
    <div class="row">
      <i class="fas fa-cannabis" style="font-size: 1em; margin-right: .5em"></i>
      <a href="https://youtu.be/KlujizeNNQM?t=9" target="_blank" style="color: white"><h6>  Vladimir vive - {{ date('Y') }} (c)</h6></a><br>
      <i class="fas fa-cannabis" style="font-size: 1em; margin-left: .5em"></i>
    </div>
  </div>

  <div class="cajasFooter col-sm-12 col-md-4">
    <div>
      <h6>Encontranos en</h6>
      <div class="redesLogos">
        <a href="http://facebook.com" target="_blank"><img src="images/icon_fb.png" alt=""></a>
        <a href="http://twitter.com" target="_blank"><img src="images/icon_tw.png" alt=""></a>
        <a href="http://instagram.com" target="_blank"><img src="images/icon_ig.png" alt=""></a>
      </div>
    </div>
  </div>
</footer>

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<!-- bootstrap JavaScript -->
<script src="libs/js/bootstrap.min.js"></script>
<script src="libs/js/holder.js"></script>


<script>

	{!! Html::script('js/jquery-2.1.0.min.js') !!} //js
	{!! Html::script('js/dropdown.js') !!} //para los select


// Código traido de la web

// $(document).ready(function(){
//   $('.add-to-cart').click(function(){
//     var id          = $(this).closest('tr').find('.product-id').text();
//     var descripcion = $(this).closest('tr').find('.product-name').text();
//     var cantidad    = $(this).closest('tr').find('input').val();
//     if(cantidad < 1 || cantidad > 10 ) {
//       var message = 'Solo números, entre 1 y 10';
//       alert(message);
//       return true;
//     }
//     window.location.href = "agregar.php?id=" + id + "&descripcion=" + descripcion + "&cantidad=" + cantidad;
//   });
//
//   $('.update-cantidad').click(function(){
//     var id          = $(this).closest('tr').find('.product-id').text();
//     var descripcion = $(this).closest('tr').find('.product-name').text();
//     var cantidad    = $(this).closest('tr').find('input').val();
//     if(cantidad < 1 || cantidad > 10 ) {
//       var message = 'Solo números, entre 1 y 10';
//       alert(message);
//       return true;
//     }
//     window.location.href = "actualizar.php?id=" + id + "&descripcion=" + descripcion + "&cantidad=" + cantidad;
//   });
// });
</script>

</body>
</html>
