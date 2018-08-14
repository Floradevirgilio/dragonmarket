<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run() {
    $this->TruncateTables([ 'categories', 'products' ]); // Vacío estas tablas antes de llenarlas. Explicado abajo qué hace ésto.
    $this->call(CategorySeeder::class); // agrego acá los seeders que voy creando para después ejecutarlos (pobrecitos. CUAC.)
    $this->call(ProductSeeder::class);
  }

  protected function TruncateTables(array $tables) { // hint de que va a recibir un array con tablas a truncar
    DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // desactivo revisión de FK en SQL xq tira error de constraint sinó.

    foreach ($tables as $table) { // foreacheo las tablas que recibo por parámetro
      DB::table($table)->truncate(); // C/vez que hagamos 'php artisan db:seed', 'truncate' va a vaciar las tablas que recibe por parám.
    } // ..antes de que se ejecuten los seeders. Sinó cada vez que hagamos db:seed se van a agregar las mismas datos una y otra vez.

    DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // reactivo revisión de FK en SQL
  }
}
