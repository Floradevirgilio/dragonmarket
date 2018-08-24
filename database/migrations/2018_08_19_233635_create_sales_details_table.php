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
      $table->timestamps();
      $table->string('description', 75); // hasta 75 caracteres
      $table->integer('quantity');
      $table->decimal('price', 8, 2); // 8 enteros, 2 decimales

      $table->integer('sale_id')->unsigned(); // en la clave foranea tiene que ir un unsigned para que no se rompa
      $table->foreign('sale_id')->references('id')->on('sales')->onDelete('cascade'); // establezco la relacion de la clave foreanea
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
