<?php
namespace App\Http\Controllers\loader;

use App\Http\Controllers\DbMySQL;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Validator;

//instancias de objetos que necesitamos para la logica de login y registro
$db        = new DbMySQL();
$auth      = new Auth();
$validator = new Validator();

// pasar las tablas a ingles, para hacer los modelos
// crear modelos
