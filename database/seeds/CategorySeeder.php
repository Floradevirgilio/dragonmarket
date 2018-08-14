<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category; // agrego el uso del modelo Category para hacerle consultas

class CategorySeeder extends Seeder {

  public function run() {
    foreach ($this->categorias() as $categoria) { // de momento las agregamos así, más adelante haremos [o no(?)] una forma más dinámica
      Category::create([ 'name' => $categoria ]); // insertamos la data usando eloquent (protip: eloquent usa los timestamps, otros métodos no)
      // DB::table('categories')->insert([ 'name' => $categoria ]); // inserción de datos por constructor de consultas
    }
  }

  protected function categorias() {
    $categorias = [
      'MEMORIAS',
      'PLACAS DE VIDEO',
      'DISCOS RIGIDOS',
      'MICRO PROCESADORES',
      'SOFTWARE',
      'GABINETES',
      'EQUIPO ARMADO',
      'MONITORES',
      'MOTHERBOARD',
      'PLACAS DE SONIDO',
      'MOUSE / TECLADOS',
      'FUENTES DE ALIMENTACION'
    ];

    return $categorias;
  }
}
