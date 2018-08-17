<header>
  <div class='container-fluid'>
    <nav class='navbar navbar-expand-md fixed-top navbar-light navbar-custom'>
      <button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbar5'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">

    <a class='navbar-brand' href='{{ route('home') }}'>
      <img src='/images/DMHead.png' alt='Logo' style='width: 50px;'>
    </a>

    <div class='navbar-collapse collapse justify-content-stretch' id='navbar5'>
      <div style='color: white;'>

        {{-- @if($auth->loginControl())
        -- si está logeado, mostramos los botones para users --
        @php
        $user   = $db->buscarUsuarioPorId($_SESSION['id']);
        $id     = $user->getId();
        $nombre = $user->getNombre();
        $avatar = '../../public/uploads/' . $user->getAvatar();
      @endphp


      <h5>Hola {{ $nombre }} </h5> --}}
      {{-- </div>

      <ul class='navbar-nav'>
      <li class='nav-item dropdown'>
      <a class='nav-link dropdown-toggle'
      href='#'
      id='navbardrop'
      data-toggle='dropdown'>
      <img src='{{ $avatar }}' alt='avatar' style='width: 60px; border-radius: 50%;'>
    </a>
    <div class='dropdown-menu'>
    <a class='dropdown-item' href='datosPersonales'>Datos Personales</a>
    <a class='dropdown-item' href='faq'>FAQ</a>
    <a class='dropdown-item' href='logout'>Cerrar Sesión</a>
  </div>
</li>
</ul>

<div class='navbar-nav nav-item'>
<a href='carrito' class='nav-link'>
@php
$cont = $db->contarItemsCarroTemporal($_SESSION['id']);
$itemsCarrito = $cont->rowCount();
@endphp
<img src='images/carrito.png' alt='carrito' style='width: 35px'>
<span class='badge' id='comparison-count'> {{ $itemsCarrito }} </span>
</a>
</div>
@else --}}

  <ul class='navbar-nav'>
    <li class='nav-item'>
      <a class='nav-link' href='{{ route('login') }}'><i class="fas fa-sign-in-alt" style="font-size: 1em"></i> Ingreso </a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='{{ route('register') }}'><i class="fas fa-user-edit" style="font-size: 1em"></i> Registro </a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='faq'><i class="fas fa-question-circle" style="font-size: 1em"></i> FAQ</a>
    </li>
  </ul>
</div>


<form class="form-inline" action='/mostrarProductos' style="margin-left: auto;">
  @csrf
  <div class='md-form my-0'>
    <input class='form-control mr-sm-2' name='txt' type='text' placeholder='Buscar ...' aria-label='Search'>
  </div>

  <div class="input-group-btn">
    <button type="submit" class="btn btn-outline-success">
      <i class="fas fa-search" style="font-size: 1.5em"></i>
    </button>
  </div>
</form>
</div>
</div>
</div>
</nav>
</div>

</header>
{{-- @endif --}}
