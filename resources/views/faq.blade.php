@extends('layouts.app')

@section('title', 'FAQ - Dragon Market - Equipos y Componentes para Gamers')

@section('content')
  <div class="container">

    <center><i class="fas fa-question-circle" style="font-size:2em; margin-right: 10px; margin-top: 20px"></i></center>
    <div class="row justify-content-center" style="margin-top: 10px;">
      <h3>PREGUNTAS FRECUENTES</h3>
    </div>

    <div id="accordion" class="accordion">
      <div class="border border-dark shadow mb-5 rounded card mb-0">

        <div class="card-header collapsed" data-toggle="collapse" href="#faq01">
          <a class="card-title">¿CUÁLES SON LAS FORMAS DE PAGO DISPONIBLES?</a>
        </div>
        <div id="faq01" class="card-body collapse" data-parent="#accordion" >
          <p><span>Mercado Pago</span>
            <br> Tarjeta de crédito (Mercado pago)
            <a href="https://www.mercadopago.com.ar/cuotas" target="_blank">Ver promociones vigentes</a>
            <br> Rapi Pago (Mercado pago)
            <a href="https://www.mercadopago.com.ar/cuotas" target="_blank">Ver promociones vigentes</a>
          </p>
          <p><span>En nuestra sucursal actualmente se puede abonar con las tarjetas:</span>
            <br> Visa, Visa Electrón, MasterCard, Argencard, Lider, Maestro, Amex, Cabal, Cabal24, Diners, Italcred, Shopping, Naranja, Nativa, Nativa MC, CMR Falabella, Cencosud, Argenta.
          </p>
        </div>

        <div class="card-header collapsed" data-toggle="collapse" href="#faq02">
          <a class="card-title">¿CUÁL ES EL COSTO DE ENVÍO?</a>
        </div>
        <div id="faq02" class="card-body collapse" data-parent="#accordion" >
          <p>El costo de envío varía en función de la distancia entre el destino y la Capital Federal. Podrá calcular el costo al momento de agregar el producto al carrito de compras. Puede acceder al envío gratis si la compra supera los $1.499. Los envíos se realizan a través de OCA.</p>
        </div>

        <div class="card-header collapsed" data-toggle="collapse" href="#faq03">
          <a class="card-title">¿CUÁL ES LA GARANTÍA DE LOS PRODUCTOS?</a>
        </div>
        <div id="faq03" class="card-body collapse" data-parent="#accordion" >
          <p>Nuestros productos cuentan con 180 días de garantía una vez efectuada la compra. Sólo cubre un desperfecto del producto relacionado a la fabricación del mismo. En caso de ser productos discontinuados o de oferta no tienen garantía. Para hacer el reclamo por falla del producto escribir a ventas@dragonmarket.com.ar indicando número de pedido, nombre del producto y detalle de la falla del mismo.</p>
        </div>

        <div class="card-header collapsed" data-toggle="collapse" href="#faq04">
          <a class="card-title">¿CÓMO ACCEDO AL FLETE GRATIS?</a>
        </div>
        <div id="faq04" class="card-body collapse" data-parent="#accordion" >
          <p>Con cualquier compra superior a $1.499, el costo del envío es bonificado.</p>
        </div>

        <div class="card-header collapsed" data-toggle="collapse" href="#faq05">
          <a class="card-title">¿CUÁNTO DEMORA LA ENTREGA DEL PEDIDO?</a>
        </div>
        <div id="faq05" class="card-body collapse" data-parent="#accordion" >
          <p>A partir de la fecha de facturación (esta demora hasta 7 días habiles), la entrega tiene un plazo entre 5 y 12 días hábiles dependiendo la localidad de entrega.</p>
        </div>

        <div class="card-header collapsed" data-toggle="collapse" href="#faq06">
          <a class="card-title">¿QUÉ SUCEDE SI NADIE RECIBE MI PEDIDO?</a>
        </div>
        <div id="faq06" class="card-body collapse" data-parent="#accordion" >
          <p>Se volverá a envíar una segunda vez. En ambos casos OCA o Urbano dejará una constancia de visita en el domicilio. Si luego de la segunda visita nadie recibe el pedido, este se encontrará por 72 horas en la sucursal de OCA que se detalle en el registro de visita. En caso de Urbano el pedido será devuelto a DRAGON MARKET.</p>
        </div>

        <div class="card-header collapsed" data-toggle="collapse" href="#faq07">
          <a class="card-title">¿PUEDE OTRA PERSONA RECIBIR MI PEDIDO?</a>
        </div>
        <div id="faq07" class="card-body collapse" data-parent="#accordion" >
          <p>Sí, como requisito debe ser mayor de 18 años y presentar el DNI.</p>
        </div>

        <div class="card-header collapsed" data-toggle="collapse" href="#faq08">
          <a class="card-title">¿CÓMO PUEDO REALIZAR EL CAMBIO DE UN PRODUCTO?</a>
        </div>
        <div id="faq08" class="card-body collapse" data-parent="#accordion" >
          <p>Si desea cambiar el producto recibido debe mantenerlo en perfectas condiciones, con su embalaje original, etiquetas y ticket de compra. Dentro de los 30 días de efectuada la compra puede dirigirse a nuestra sucursal (sujeto a disponibilidad de stock) o mandar un email a ventas@dragonmarket.com.ar indicando el número de pedido. El costo del envío a domicilio por cambio corre por cuenta y cargo del cliente.</p>
        </div>

        <div class="card-header collapsed" data-toggle="collapse" href="#faq09">
          <a class="card-title">¿TENGO QUE REGISTRARME ANTES DE COMPRAR?</a>
        </div>
        <div id="faq09" class="card-body collapse" data-parent="#accordion" >
          <p>No es necesario, una vez seleccionado y agregado el producto al carrito de compras deberas cargar los datos de entrega, contacto y medio de pago. Luego recibirás un email con la confirmación de tu pedido.</p>
        </div>

        <div class="card-header collapsed" data-toggle="collapse" href="#faq10">
          <a class="card-title">¿CÓMO PUEDO ACCEDER A MI CEUNTA?</a>
        </div>
        <div id="faq10" class="card-body collapse" data-parent="#accordion" >
          <p>Para ingresar a tu cuenta, deberás ingresar en www.dragonmarket.com.ar y hacer click en el botón Ingreso / Registro, ubicado en el margen superior izquierdo.</p>
        </div>

        <div class="card-header collapsed" data-toggle="collapse" href="#faq11">
          <a class="card-title">¿CÓMO RECIBO MI FACTURA?</a>
        </div>
        <div id="faq11" class="card-body collapse" data-parent="#accordion" >
          <p>Tu factura será enviada por correo electrónico y será enviada desde la casilla: ventas@dragonmarket.com.ar</p>
        </div>

        <div class="card-header collapsed" data-toggle="collapse" href="#faq12">
          <a class="card-title">CÓDIGOS PROMOCIONALES</a>
        </div>
        <div id="faq12" class="card-body collapse" data-parent="#accordion" >
          <p>Los códigos promocionales no se aplican a los productos rebajados. Si has devuelto un pedido en el que se ha utilizado un código promocional, el valor de dicho código no será reembolsado. Los códigos promocionales solo son válidos durante un tiempo determinado.</p>
        </div>

      </div>
    </div>
  </div> <!-- Cierro container FAQ -->
@endsection
