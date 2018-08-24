
<div class='container-fluid shadow' style="margin-bottom: 7em">
  <nav class='navbar navbar-expand-md fixed-top navbar-light navbar-custom'>
    <button class='navbar-toggler navbar-toggler-right'
    type='button'
    data-toggle='collapse'
    data-target='#navbar5'>
    <span class='navbar-toggler-icon'></span>
  </button>
  <a class='navbar-brand' href='index.php'>
    <img src='../images/DMHead.png' alt='Logo' style='width: 50px;'>
  </a>

  <div class='navbar-collapse collapse justify-content-stretch' id='navbar5'>
    <div style='color: white;'>
      <div class="d-flex justify-content-between align-items-center">

        <div class="d-flex justify-content-center" style='color: white'>
          {{-- <div class="align-self-center" style="margin-right: 2em">
          <i class="fas fa-shopping-cart" style="font-size: 1em"> (0)</i>
        </div> --}}

        <ul class='navbar-nav' style="padding-top: 1em">



          @if (auth()->check()) {{-- chequeo si hay un user autenticado  --}}
            @if (auth()->user()->admin == 1) {{-- si el user es admin --}}
              <li class="nav-item dropdown">{{-- ... le muestro las opciones de admin --}}
                <a class="nav-link dropdown-toggle"
                href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Productos</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/Category">Cargar</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/products">Editar</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/products">Eliminar</a>
                </li>
                {{-- </div> --}}

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrar</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/adminCategory">Nueva categoría</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/adminProduct">Nuevo producto</a>
                  </div>
                </li>
              @else
                <li class='nav-item'> {{-- estas dos opciones se muestran para admins y clientes --}}
                  <a class='nav-link' href='/cart'><i
                    class="fas fa-shopping-cart" style="font-size: 1em"></i> ( {{ $productsCount }} ) </a>
                  </li>
                @endif
                <li class='nav-item'>
                  <a class="nav-link" href="datosPersonales"><span><i
                    class="fas fa-user" style="font-size: 1em"></i> {{ auth()->user()->first_name }}</span></a>
                  </li>
                  <li class='nav-item'>
                    <a class='nav-link' href='/logout'><i
                      class="fas fa-sign-out-alt" style="font-size: 1em"></i> Cerrar Sesión</a>
                    </li>
                  @else
                    <li class='nav-item'> {{-- y la botonera para invitados no logeados --}}
                      <a class='nav-link' href='/logInToShop'><i
                        class="fas fa-shopping-cart" style="font-size: 1em"></i> (0)</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='/login'><i
                          class="fas fa-sign-in-alt" style="font-size: 1em"></i> Ingreso </a>
                        </li>
                        <li class='nav-item'>
                          <a class='nav-link' href='/register'><i
                            class="fas fa-user-edit" style="font-size: 1em"></i> Registro </a>
                          </li>
                          @endif
                          <li class='nav-item'>
                            <a class='nav-link' href='faq'><i
                              class="fas fa-question-circle" style="font-size: 1em"></i> FAQ</a>
                            </li>
                        </ul>
                      </div>

                      <div>
                        <form class="form-inline flex-nowrap pt-3"
                        action='/showProducts'
                        style="margin-left: auto;">
                        @csrf
                        <div class='md-form my-0'>
                          <input class='form-control mr-sm-2'
                          name='txt'
                          type='text'
                          placeholder='Buscar ...'
                          aria-label='Search'>
                        </div>

                        {{-- <span class="input-group-btn">
                        <button type="submit" class="btn btn-outline-success">
                        <i class="fas fa-search" style="font-size: 1.5em"></i>
                      </button>
                    </span> --}}
                  </form>
                </div>
                {{-- </div> cont between --}}
              </div> {{-- container --}}
            </div> {{-- container fluid --}}
          </nav>
        </div>

      </header>
      {{-- @endif --}}
