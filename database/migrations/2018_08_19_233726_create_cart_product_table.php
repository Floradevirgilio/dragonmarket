<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartProductTable extends Migration {
    public function up() {
        Schema::create('cart_product', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();

          $table->integer('quantity');

          $table->integer('cart_id')->unsigned();
          $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');

          $table->integer('product_id')->unsigned();
          $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('cart_product');
    }
}
