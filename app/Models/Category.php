<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
   protected $fillable = ['name'];
    // protected $table = 'categories'; en caso de no usar la convención singular/plural en inglés de Laravel
    // public $timestaps = false; en caso de no querer usar los timestamps

    public function products() {
     return $this->hasMany(Product::class);
}
