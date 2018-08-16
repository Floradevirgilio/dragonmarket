@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="jumbotron column col-xs-5 col-sm-5 col-md-6 col-lg-4 shadow p-4 mb-4 border {{ 'border-info'}}" style="margin-top: 50px;">
        <div class="row justify-content-center">
          <center><h4><i class="fas fa-sign-in-alt" style="font-size: 1em"></i> RECUPERAR CONTRASEÑA</h4></center>
        </div><br>
        <center><li>Te enviaremos un correo para reestablecer tu contraseña</li></center>

        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif

          <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Recuperar Contraseña') }}">

            <div class="container column col-xs-12 col-sm-12 col-md-12 col-lg-12">

              <label for="email"><strong>{{ __('Email') }}</strong></label>

              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email"
              value="{{ old('email') }}" required placeholder="abc@123.com">
              <br>
              @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif

              <center><button type="submit" class="btn btn-primary">
                {{ __('Enviar') }}
              </button></center>
              <br>
              <center><div class="row justify-content-center">
                <a class="btn btn-link" href="{{ route('login') }}">
                  <i class="fas fa-sign-in-alt" style="font-size: 1em"></i> {{ __('Volver') }} 
                  </a>
                </div></center>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
