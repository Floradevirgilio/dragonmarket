<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller {
    public function homeShowProducts() {
        $categories = CategoryController::showCategories(); // pido el listado de categorias para el aside
        $pcs = ProductController::showProducts()->where('category_id', '=', 7)->random(3); // pide al azar 3 pcs armadas para mostrar
        $products = ProductController::showProducts()->where('category_id', '!=', 7)->random(6); // pide al azar 6 productos para mostrar

        return view('/home', [ 'pcs' => $pcs, 'categories' => $categories, 'products' => $products ]); // redirijo al home y paso los datos
    }
}
