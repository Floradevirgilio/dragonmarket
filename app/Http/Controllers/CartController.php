<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($id) {
      // if (
      //     !session()->has('products')
      //     || !in_array($id, session()->get('products'))
      // ) {
      session()->push('products', $id);
      // }
      //
      return redirect('carrito');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
      $product = new Cart;

      $product->product_id = $request->product_id;
      $product->quantity = $request->quantity;
      $product->user_id = $request->user_id;
      // $product->user_id = Auth::user()->id;

      if ($product->save()) { // true = lo pudo guardar
        return redirect('/home');
      }
      else { // no lo pudo guardar
        return redirect('/faq');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(Request $request) {
         // $product = [];
         //
         // if (session()->has('products')) {
         //     $cart = session()->get('products');
         //     $products = \App\Models\Product::whereIn('id', $cart)->get();
         // }

         // return view('carrito', ['products' => $products]);
         return view('carrito', [ 'cantidad' => $request->input('quantity') ]);
         // return $request->input('quantity');
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
         session()->forget('products');

         return redirect('carrito');
     }
}
