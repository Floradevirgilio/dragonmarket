<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller {
  public static function showCategories() {
    $categories = Category::all()->pluck('name', 'id'); // busca en la tabla categories y filtro el 'name' y el 'id'
    return $categories;
  }


 public function newCategory(){
  return view('/adminCategory');
 }

  }
