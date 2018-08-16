<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Redirect extends Controller {

  public function __invoke($direccion = null, $id = null) { //null por si no hay get, por ej 'localhost:8000'
    if (is_null($direccion) || $direccion == 'home') { // si está en el home..
      $categories = CategoryController::showCategories(); // pido el listado de categorias para el aside
      $pcs = ProductController::showPcs(); // pide 3 pcs armadas para mostrar
      $products = ProductController::showProducts(); // pide 6 productos para mostrar

      return view('/home', [ 'pcs' => $pcs, 'categories' => $categories, 'products' => $products ]); // redirijo al home y paso los datos
    }

    elseif ($direccion == 'mostrarProductos') {
      if (!is_null($id)) {
        $categoryProducts = ProductController::show($id);
        return view('mostrarProductos', ['categoryProducts' => $categoryProducts]);
      }

      elseif (isset($_GET['txt'])) {
        $search = '%'.trim($_GET['txt']).'%'; // trim para sacar posibles espacios, % como comodines para una búsqueda eficiente
        $searchResults = ProductController::searchProducts($search); // le paso al controlador lo que el cliente quiere buscar
        return view('mostrarProductos', [ 'searchResults' => $searchResults ]); // muestro la view y le paso el resultado de la búsqueda
      }

    }

    else
      return in_array($direccion, $this->paginas()) ? view($direccion) : view('404'); // si lo que llega por get está en el array, redirije a esa view, sino a 404
  }

  protected function paginas() { // listado de las paginas de la web dragon-market
    $paginasPermitidas = [ //que tienen el mismo nombre que las views
      // 'agregarCarrito',
      'faq',
      // 'home', // ya la estamos usando arriba
      'ingreso',
      // 'auth/login',
      // 'logout',
      // 'passRecover',
      // 'productosBuscar',
      // 'productosInfo',
      // 'productosMostrar',
      'registro',
    ];

    return $paginasPermitidas;
  }
}
