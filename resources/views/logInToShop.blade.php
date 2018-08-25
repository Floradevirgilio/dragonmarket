@extends('layouts.app')

@section('title', 'Ingresá a tu cuenta - Dragon Market - Equipos y Componentes para Gamers')

@section('content')

    <div id="wrap">
        <div id="main" class="container">
            <div class="container">

                <center><div style="margin-top: 75px;">
                    <br>
                    <h3>
                        <img src="images/DMHead.png" alt="Logo" style="width: 1em"> ¡BIENVENIDO A DRAGON MARKET!
                        <img src="images/DMHead.png" alt="Logo" style="width: 1em"> <br><br>
                        Para comprar, tenés que ingresar a tu cuenta </h3>
                    </div></center><br>

                    <center>
                        <div class="card shadow p-3 mb-5 bg-white rounded border border-primary" style="width: 18rem;">
                            <div class="card-body">
                                <a href="/register" class="btn btn-primary btn-block">Soy nuevo</a><hr>
                                <a href="/login" class="">Ya tengo cuenta</a>
                            </div>

                        </div>
                    </center>
                </div>
            </div> {{-- Cierro container --}}
        </div> {{-- Cierro wrap --}}
    @endsection
