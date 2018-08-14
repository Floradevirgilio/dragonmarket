<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesDetailsTable extends Migration {
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up() {
    Schema::create('sales_details', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('cart_id')->unsigned(); // en la clave foranea tiene que ir un unsigned para que no se rompa
      $table->foreign('cart_id')->references('id')->on('carts'); // establezco la relacion de la clave foreanea
      $table->string('description', 75); // hasta 75 caracteres
      $table->integer('quantity');
      $table->decimal('price', 8, 2); // 8 enteros, 2 decimales
      $table->timestamps();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down() {
    Schema::dropIfExists('sales_details');
  }
}
