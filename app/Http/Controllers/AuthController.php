<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller {
    // public function __construct() {
    //     $this->middleware('auth');
    // }

    public function login(Request $request) {
        $datosLogin = $this->validate(request(), [ // valida nuevamente los datos y los guarda en $datosLogin
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (Auth::attempt($datosLogin)) { // intenta logear
            return redirect('/'); // si está todo ok, al home
        }

        else return // si falla..
        back() // vuelve a la pantalla de login
        ->withErrors( ['error' => 'Los datos ingresados son incorrectos' ]) // muestra error
        ->withInput(request(['email'])); // mantiene en el input el email que puso
    }

    public function logout() { // logout
        Auth::logout();
        return redirect('/');
    }

    public function index() {
        return redirect('/');
    }

}
