<header>
    <div class='container-fluid'>
        <nav class='navbar navbar-expand-md fixed-top navbar-light navbar-custom'>

            {{-- <button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbar5'> --}}
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbar5'>
                <span class='navbar-toggler-icon'></span>
            </button>

            <div class="container-fluid">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">

                        <div>
                            <a class='navbar-brand' href='/'>
                                <img src='/images/DMHead.png' alt='Logo' style='width: 50px;'>
                                <img src='/images/DMText.png' alt='Logo' style='width: 200px;'>
                            </a>
                        </div>

                        {{-- <div class='navbar-collapse collapse justify-content-stretch' id='navbar5'> --}}
                        <div>
                            <form class="form-inline flex-nowrap pt-3" action='/mostrarProductos' style="margin-left: auto;">
                                @csrf
                                <div class='md-form my-0'>
                                    <input class='form-control mr-sm-2' name='txt' type='text' placeholder='Buscar ...' aria-label='Search'>
                                </div>

                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-outline-success">
                                        <i class="fas fa-search" style="font-size: 1.5em"></i>
                                    </button>
                                </span>
                            </form>
                        </div>


                        <div class="d-flex justify-content-center" style='color: white'>
                            {{-- <div class="align-self-center" style="margin-right: 2em">
                            <i class="fas fa-shopping-cart" style="font-size: 1em"> (0)</i>
                        </div> --}}

                        <ul class='navbar-nav' style="padding-top: 1em">
                            <li class='nav-item'>
                                <a class='nav-link' href='/cart'><i class="fas fa-shopping-cart" style="font-size: 1em"></i> (0{{--{{ $productsCount }} --}}) </a>  {{-- Redirect me manda un objeto $cart, lo que me permite acceder a los métodos publicos del modelo Cart --}}
                            </li>
                            <li class="nav-item dropdown">{{-- sólo le debería aparecer al admin --}}
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Producto</a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/products">Cargar</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/products">Editar</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/products">Eliminar</a>
                              </div>
                            </li>

                            @if (auth()->user())
                                <li class='nav-item'>
                                    <a class="nav-link" href="datosPersonales"><span><i class="fas fa-user" style="font-size: 1em"></i> {{ auth()->user()->first_name }}</span></a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='/logout'><i class="fas fa-sign-out-alt" style="font-size: 1em"></i> Cerrar Sesión</a>
                                </li>

                            @else
                                <li class='nav-item'>
                                    <a class='nav-link' href='/login'><i class="fas fa-sign-in-alt" style="font-size: 1em"></i> Ingreso </a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='/register'><i class="fas fa-user-edit" style="font-size: 1em"></i> Registro </a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href='faq'><i class="fas fa-question-circle" style="font-size: 1em"></i> FAQ</a>
                                </li>
                            @endif
                        </ul>
                    </div>

                </div> {{-- cont between --}}
            </div> {{-- container --}}
        </div> {{-- container fluid --}}

    </div>
</nav>
</div>

</header>
{{-- @endif --}}
