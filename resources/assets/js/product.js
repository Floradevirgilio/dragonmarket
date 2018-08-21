$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'ProductController@form'
  })
  .done(function(categories){
    $('#categories').html(categories) //categorías
  })
  .fail(function(){
    alert('Hubo un errror al cargar las categorías')
  })

  $('#categories').on('change', function(){
    var id = $('#categories').val()
    $.ajax({
      type: 'POST',
      url: '/product.blade.php', //productos
      data: {'category_id': id}
    })
    .done(function(categories){
      $('#products').html(products)
    })
    .fail(function(){
      alert('Hubo un errror al cargar los productos')
    })
  })

  $('#enviar').on('click', function(){
    var resultado = 'Lista de reproducción: ' + $('#lista_reproduccion option:selected').text() +
    ' Video elegido: ' + $('#videos option:selected').text()

    $('#resultado1').html(resultado)
  })

})
