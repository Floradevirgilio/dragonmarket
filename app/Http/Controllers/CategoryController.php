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

  public function index() {
     $categories = Category::pluck('name', 'id');
     return view('/product', compact('categories'));
  }

  public function getProducts(Request $request, $id){
      if($request->ajax()){
          $products = Product::products($id);
          return response()->json($products);
      }
  }





}
