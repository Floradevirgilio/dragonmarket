<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Auth;

class UserController extends Controller {
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request) {
        $data = request()->validate([ // valido los datos que me llegan
            'email' => 'required|email|unique:users,email', // esto ya chequea que no exista en la db
            'email-confirm' => 'required|same:email',
            'password' => 'required|min:6', // al menos seis caracteres
            'password-confirm' => 'required|same:password'
        ]);

        User::create([ // crea un nuevo user con los datos que mandó
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'avatar' => '1.jpg',
            // 'admin' => $data['admin'] // el admin lo creamos en el seeder
        ]);

        $datosParaLogear = request()->validate([ // toma los datos que necesita para logearlo
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (Auth::attempt($datosParaLogear)) { // logea
            return redirect('/'); // ..y redirige al home
        }
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index() {
        //
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create() {

    }


    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id) {
        //
    }
}
