<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User; // agrego el uso del modelo Category para hacerle consultas

class UserSeeder extends Seeder {
    public function run() {
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Rodo',
            'email' => 'rodo@admin.com',
            'password' => '123456',
            // 'avatar' => 'rodo.jpg'
        ]);
    }
}
