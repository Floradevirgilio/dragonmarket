<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Cart;
use App\Models\Sale;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('first_name')->paginate(6);

        return view('abmUser', compact('users'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([ // valido los datos que me llegan y tambien que no exista en la db
        'first_name' => 'required|min:4',
        'last_name'  => 'required|min:4',
        'email'            => 'required|email|unique:users,email',
        'email-confirm'    => 'required|same:email',
        'password'         => 'required|min:6', // al menos seis caracteres
        'password-confirm' => 'required|same:password',
        'avatar'           => 'image' // Que sea imágen - viene imagen por default de la migracion
    ]);

        $user = User::create([ // crea un nuevo user con los datos que mandó
            'first_name' => $request['first_name'],
            'last_name'  => $request['last_name'],
            'email'      => $request['email'],
            'password'   => bcrypt($request['password']),
            // 'avatar'     => $request['avatar'],
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


    public function update(Request $request) //Actualizar datos del Usuario
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
              'last_name'  => 'required|min:4',
              'avatar'     => 'image',

          ]);
        } else {
          $errors = request()->validate([ // valido los datos que me llegan

            'email' => 'required|email|unique:users,email',
            // esto ya chequea que no exista en la db
            // 'email-confirm' => 'required|same:email',
              'first_name' => 'required|min:4',
              'last_name'  => 'required|min:4',
              'avatar'     => 'image',
          ]);
        }

        if(($request['password'])){
          $errors = request()->validate([
              'password'         => 'min:6', // valido los datos que me llegan
              'password-confirm' => 'same:password' // mínimo seis caracteres
          ]);
        }

        $user = User::find(auth()->user()->id);
        $user->first_name = $request['first_name'];
        $user->last_name  = $request['last_name'];
        $user->email      = $request['email'];

        if(($request['password']) != ""){
          $user->password = bcrypt($request['password']);
        }

        if($request->hasFile('avatar')) {
            $user->avatar = $request->file('avatar')->store('/public/users');
        }

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
        $orderHistory = Sale::where('user_id', '=', auth()->user()->id)->get([ 'id', 'created_at', 'total', 'status' ]);
        // return view('/actualizarDatosPersonales', [ 'orderHistory' => $orderHistory ]);
        return redirect('/');
             // ..y redirige a Mis Datos Personales(Agregarle un mensaje de Confirmacion de Cambio de Datos!)
        // }
    }

    public function show(Request $request) {
      $orderHistory = Sale::where('user_id', '=', auth()->user()->id)->get([ 'id', 'created_at', 'total', 'status' ]);
      return view('/actualizarDatosPersonales', [ 'orderHistory' => $orderHistory ]);
    }

    // public function create() {
    // }
    //
    // public function edit($id) {
    // }
    //
    // public function destroy($id) {
    // }
    // public function update(Request $request, $id) { // ya hay un update en uso
    // }
}
