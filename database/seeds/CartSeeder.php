<?php

use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeder extends Seeder {
  public function run() {
    Cart::create([
      'user_id' => '1',
      'status' => 'admin',
    ]);
  }
}
