<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
   protected $fillable = ['description', 'image', 'price', 'stock', 'category_id'];
  // protected $table = 'products'; en caso de no usar la convención singular/plural en inglés de Laravel
  // public $timestaps = false; en caso de no querer usar los timestamps

  public function category() {
      return $this->belongsTo(Category::class);
  }

  public function cart() {
    return $this->belongsTo(Cart::class); // la clase con la que hago la relación, y la tabla pivot
  }

}
