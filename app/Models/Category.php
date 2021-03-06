<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    // protected $table = 'categories'; en caso de no usar la convención singular/plural en inglés de Laravel
    // public $timestaps = false; en caso de no querer usar los timestamps
    protected $fillable = [ 'name', 'active' ]; 
}
