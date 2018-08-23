<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model {
  protected $table = 'cart_product';
  protected $fillable = [ 'quantity', 'cart_id', 'product_id' ];

  public function carts() {
      return $this->belongsToMany('');
  }

  // public static function ProductQuantity($product_id) {
  //   return CartProduct::where('product_id', '=', $product_id)->get(['quantity']);
  // }
}
