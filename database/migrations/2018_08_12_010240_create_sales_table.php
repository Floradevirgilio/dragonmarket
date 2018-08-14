<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration {
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up() {
    Schema::create('sales', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->unsigned(); // en la clave foranea tiene que ir un unsigned para que no se rompa
      $table->foreign('user_id')->references('id')->on('users'); // establezco la relacion de la clave foreanea
      $table->decimal('total', 8, 2); // 8 enteros, 2 decimales
      $table->tinyInteger('status'); // estado de la venta, de momento siempre queda en 1
      $table->timestamps();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down() {
    Schema::dropIfExists('sales');
  }
}
