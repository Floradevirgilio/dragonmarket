<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CartProduct;

class Cart extends Model {
  // protected $table = 'carts'; en caso de no usar la convención singular/plural en inglés de Laravel
  // public $timestaps = false; en caso de no querer usar los timestamps

  /////////////////////////// MASS ASSIGNMENT ///////////////////////////
  protected $fillable = [ 'user_id', 'quantity', 'status' ]; // habilito el campo status para que se pueda modificar

  /////////////////////////// RELACIONES /////////////////////////////
  public function cart_product() { // ve los registros de la tabla cart_product
    return $this->hasMany('App\Models\CartProduct'); // hasMany espera que CartProduct tenga una referencia a Cart
  }

  public function products() {
    return $this->belongsToMany('App\Models\Product', 'cart_product'); // la clase con la que hago la relación, y la tabla pivot
  }

  public function users() { // user_id
    return $this->belongsTo('App\Models\User'); // le pertenece a un user
  }

  //////////////////// MANEJO DE INFO DEL CART ///////////////////////
  public static function findCartByUserId() {
    if (auth()->user()) {
      return Cart::where('user_id', '=', auth()->user()->id); // busco el carrito con el user_id = al id del user autenticado
    }
  }

  public static function productsQuantity() { // no static porque lo mando a llamar desde un OBJETO (en la navbar)
    if (auth()->user()) {
      $cart = Cart::findCartByUserId()->get(['id'])->toArray(); // busco el carrito del usuario comprando, tomo el id y convierto a array
      $cart_id = $cart[0]['id']; // me guardo el id del carrito
      return CartProduct::where('cart_id', '=', $cart_id)->sum('quantity'); // sumo la columna quantity y devuelvo
    }
  }

  public static function finalPrice() { // siempre hacer las sumas a nivel sql
    return $this->products()->sum('price');
  }

  public static function cartProducts() {
    if (auth()->user()) {
      $cart = Cart::findCartByUserId()->get(['id'])->toArray(); // busco el carrito del usuario comprando, tomo el id y convierto a array
      $cart_id = $cart[0]['id']; // me guardo el id del carrito
      return CartProduct::all()->where('cart_id', '=', $cart_id)->get(['quantity', 'product_id']); // devuelvo el contenido
    }
  }
}
