{{-- <div class='container-fluid shadow' style="margin-bottom: 7em"> --}}
<div class='container-fluid' style="margin-bottom: 100px;">
    <nav class='navbar navbar-expand-md fixed-top navbar-light navbar-custom' >
      <button class='navbar-toggler navbar-toggler-right'
              type='button'
              data-toggle='collapse'
              data-target='#navbar5'>
          <span class='navbar-toggler-icon'></span>
      </button>
      <a class='navbar-brand' href='/'>
          <img src='../images/DMHead.png' alt='Logo' style='width: 50px;'>
      </a>

      <div class='navbar-collapse collapse justify-content-stretch' id='navbar5'>
          <div style='color: white;'>
          {{-- <div class="d-flex justify-content-between "> --}}
            {{-- <div class="d-flex justify-content-center" style='color: white'> --}}
            {{-- <ul class='navbar-nav' style="padding-top: 1em"> --}}
              <ul class='navbar-nav'>
              @if (auth()->check()) {{-- chequeo si hay un user autenticado  --}}
                  @if (auth()->user()->admin == 1) {{-- si el user es admin --}}
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">Administrar
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/abmCategory">ABM Categorías</a>
                      <a class="dropdown-item" href="/abmProduct">ABM Productos</a>
                      <a class="dropdown-item" href="/abmUser">ABM Usuarios</a>
                    </div>
                  </li>
              @else
                  <li class='nav-item'> {{-- estas dos opciones se muestran para admins y clientes --}}
                      <a class='nav-link' href='/cart'>
                        <i class="fas fa-shopping-cart"></i>({{ $productsCount }})
                      </a>
                  </li>
              @endif
                  <li class='nav-item'>
                    <a class="nav-link"
                          href="{{route('actualizarDatosPersonales.show', ['user_id' => auth()->user()->id])}}">
                          <span>{{ auth()->user()->first_name }}</span>
                    </a>
                  </li>
                  <li>
                    <div class="avatar">
                         <img class="img-fluid mx-auto d-block"
                              src='{{ Storage::url(auth()->user()->avatar) }}' alt='avatar' >
                    </div>
                  </li>
                  <li class='nav-item'>
                      <a class='nav-link' href='/logout'>
                        <i class="fas fa-sign-out-alt"></i>Cerrar Sesión
                      </a>
                  </li>
              @else
                  <li class='nav-item'> {{-- y la botonera para invitados no logeados --}}
                      <a class='nav-link' href='/logInToShop'>
                        <i class="fas fa-shopping-cart"></i>(0)
                      </a>
                  </li>
                  <li class='nav-item'>
                      <a class='nav-link' href='/login'>
                        <i class="fas fa-sign-in-alt"></i>Ingreso
                      </a>
                  </li>
                  <li class='nav-item'>
                      <a class='nav-link' href='/register'>
                        <i class="fas fa-user-edit"></i>Registro
                      </a>
                  </li>
               @endif
                  <li class='nav-item'>
                      <a class='nav-link' href='/faq'>
                        <i class="fas fa-question-circle"></i> FAQ
                      </a>
                  </li>
              </ul>
      </div>
      <form class="form-inline"
              action='/showProducts'
              style="margin-left: auto;">
              @csrf
            <div class='md-form my-0'>
                <input class='form-control mr-sm-2'
                       name='txt'
                       type='text'
                       placeholder='buscar ...'
                       aria-label='Search'>
            </div>
        </form>
    </div>
  </nav>
</div>
