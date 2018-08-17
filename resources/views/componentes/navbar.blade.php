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

            <div class="">
              <a class='navbar-brand' href='{{ route('home') }}'>
                <img src='/images/DMHead.png' alt='Logo' style='width: 50px;'>
                <img src='/images/DMText.png' alt='Logo' style='width: 200px;'>
              </a>
            </div>

            {{-- <div class='navbar-collapse collapse justify-content-stretch' id='navbar5'> --}}
            <div class="">
              <form class="form-inline flex-nowrap pt-3" action='/mostrarProductos' style="margin-left: auto;">
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

            <div style='color: white;'>
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

          </div> {{-- cont between --}}
        </div> {{-- container --}}
      </div> {{-- container fluid --}}

    </div>
  </nav>
</div>

</header>
{{-- @endif --}}
