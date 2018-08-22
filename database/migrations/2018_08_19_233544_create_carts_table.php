<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('carts', function (Blueprint $table) {
            // $table->increments('id');
            // $table->string('status');
            // $table->timestamps();

            $table->increments('id');
            $table->timestamps();

            $table->integer('user_id')->unsigned(); // en la clave foranea tiene que ir un unsigned para que no se rompa
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // establezco la relacion de la clave foreanea. Cascade para que al borrar un user no quede su carrito sin user.

            // $table->integer('product_id')->unsigned(); // en la clave foranea tiene que ir un unsigned para que no se rompa
            // $table->foreign('product_id')->references('id')->on('products'); // establezco la relacion de la clave foreanea

            $table->string('status', 30)->default('incomplete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('carts');
    }
}
