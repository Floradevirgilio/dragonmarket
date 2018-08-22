<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
  // protected $table = 'products'; en caso de no usar la convención singular/plural en inglés de Laravel
  // public $timestaps = false; en caso de no querer usar los timestamps

  public function categories() {
      return $this->belongsTo('App\Models\Category');
  }

  public function carts() {
    return $this->belongsTo('App\Model\Cart'); // la clase con la que hago la relación, y la tabla pivot
  }

  public static function products($id){
    return Product::where('category_id','=',$id)
    ->get();
  }
}
