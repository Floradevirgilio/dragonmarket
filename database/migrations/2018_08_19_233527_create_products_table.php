<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            // $table->string('image', 50); // hasta 50 caracteres
            $table->string('description', 75); // hasta 75 caracteres
            $table->decimal('price', 8, 2); // 8 enteros, 2 decimales
            $table->tinyInteger('stock')->default(1);
            $table->tinyInteger('active')->default(1);

            $table->integer('category_id')->unsigned(); // en la clave foranea tiene que ir un unsigned para que no se rompa
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // establezco la relacion de la clave foreanea
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('products');
    }
}
