<?php

define('PRODUCTOS_KEY', 'productos');

function listProductos()
{
    $productosJson = file_get_contents('datos/' . PRODUCTOS_KEY . '.json');

    $productos = json_decode($productosJson, true);

    return $productos[PRODUCTOS_KEY];
}

?>