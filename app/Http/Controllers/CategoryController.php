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

  public function newCategory() {
        return view('/adminNewCategory');
  }

  public function categories() {
    $categories = Category::pluck('name', 'id');
    return view('/adminCategory', compact('categories'));
  }

  public function store(Request $request) {
    request()->validate([
        'name' => 'required|min:3|max:100|unique:categories',
        //regex:\b[A-Z]\b
    ], [
        'name.required' => 'El nombre es obligatorio.',
        'name.unique' => 'El nombre ya existe.',
        //'name.regex' => 'El nombre sólo tiene que tener mayúsculas.'

    ]);

    $producto = Category::create(request()->all());
    return redirect('/');

  }

  public function update(Request $request) {

      $data = request()->validate([
          'name' => 'required|min:3|max:100|unique:categories'
      ]);

    $category = Category::find(category()->id);
    $category->name = $request['name'];
    $category->active = $request['active'];

    $category->save();

    return redirect('/');
  }

  // public function getProducts(Request $request, $id){
  //     if($request->ajax()){
  //         $products = Product::products($id);
  //         return response()->json($products);
  //     }
  // }





}
