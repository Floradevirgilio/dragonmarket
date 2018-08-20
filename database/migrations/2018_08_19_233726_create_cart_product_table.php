<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartProductTable extends Migration {
    public function up() {
        Schema::create('cart_product', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('cart_id')->unsigned();
          $table->foreign('cart_id')->references('id')->on('carts');

          $table->integer('product_id')->unsigned();
          $table->foreign('product_id')->references('id')->on('products');

          $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('cart_product');
    }
}
