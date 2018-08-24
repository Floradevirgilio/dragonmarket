<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Cart;
use Auth;

class UserController extends Controller {
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request) {
        $data = request()->validate([ 
            // valido los datos que me llegan
            // esto ya chequea que no exista en la db
            'email'            => 'required|email|unique:users,email', 
            'email-confirm'    => 'required|same:email',
            'password'         => 'required|min:6', // al menos seis caracteres
            'password-confirm' => 'required|same:password',
            'avatar'           => 'required|image' // Requerido y que sea imagenes
        ]);

        if ($request['avatar']==null) {
            $request['avatar'] = 'public/users/default.jpg';}

        $user = User::create([ 

            // crea un nuevo user con los datos que mandó
            'first_name' => $request['first_name'],
            'last_name'  => $request['last_name'],
            'email'      => $request['email'],
            'password'   => bcrypt($request['password']),
            'avatar'     => $request['avatar'],
            // 'admin' => $data['admin'] // el admin lo creamos en el seeder
        ]);

        Cart::create([ // le creo un carrito
            'user_id' => $user->id,
        ]);

        $datosParaLogear = request()->validate([ // toma los datos que necesita para logearlo
            'email'    => 'email|required',
            'password' => 'required'
        ]);

        if (Auth::attempt($datosParaLogear)) { // logea
            return redirect('/'); // ..y redirige al home
        }
    }

    //Actualizar datos del Usuario
    public function update(Request $request)
    {
        if($request['email'] == auth()->user()->email) 
            // Si no modifica el email,que no lo valide
            // ya que existe en la BD
        {
          $data = request()->validate([ 
            // valido los datos que me llegan
            // 'email' => 'required|email|unique:users,email', 
            // esto ya chequea que no exista en la db
            // 'email-confirm' => 'required|same:email',
              'first_name' => 'required|min:4',
              'last_name'  => 'required',
              'avatar'     => 'image',

          ]);
        } else {
          $errors = request()->validate([ 
            // valido los datos que me llegan
            // 'email' => 'required|email|unique:users,email', 
            // esto ya chequea que no exista en la db
            // 'email-confirm' => 'required|same:email',
              'first_name' => 'required|min:4',
              'last_name'  => 'required',
              'avatar'     => 'image',
          ]);
        }

        if(($request['password'])){
          $errors = request()->validate([ 
                // valido los datos que me llegan
              'password'         => 'min:6', 
                // mínimo seis caracteres
              'password-confirm' => 'same:password'
          ]);
        }

        $user = User::find(auth()->user()->id);
        $user->first_name = $request['first_name'];
        $user->last_name  = $request['last_name'];
        $user->email      = $request['email'];
        
        if(($request['password']) != ""){
          $user->password = bcrypt($request['password']);
        }
        
        $user->avatar = $request->file('avatar')->store('public/users');

        $user->save();
        // $user = User::save([ // actualiza los datos que mandó
        //         'first_name' => $request['first_name'],
        //         'last_name' => $request['last_name'],
        //         'email' => $request['email'],
        //
        //         // 'avatar' => '1.jpg',
        //         // 'admin' => $data['admin'] // el admin lo creamos en el seeder
        // ]);



        // $datosParaLogear = request()->validate([ // toma los datos que necesita para logearlo
        //     'email' => 'email|required',
        //     'password' => 'required'
        // ]);

        // if (Auth::attempt($datosParaLogear)) { // logea
            return redirect('/datosPersonales'); // ..y redirige a Mis Datos Personales(Agregarle un mensaje de Confirmacion de Cambio de Datos!)
        // }
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
    * Update the specified resource in storage.    //comentada,porque se declaró al principio
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    // public function update(Request $request, $id) {
    //     //
    // }

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
