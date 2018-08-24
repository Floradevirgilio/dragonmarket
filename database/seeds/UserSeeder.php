<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User; // agrego el uso del modelo Category para hacerle consultas

class UserSeeder extends Seeder {
    public function run() {
        User::create([ // user prueba admin
            'first_name' => 'Admin',
            'last_name' => 'Rodo',
            'email' => 'rodo@admin.com',
            'password' => bcrypt('123456'),
            'admin' => 1,
            // 'avatar' => 'rodo.jpg'
        ]);

        User::create([ // user prueba cliente
            'first_name' => 'Alancete',
            'last_name' => 'Casal',
            'email' => 'a@a.com',
            'password' => bcrypt('123456'),
            // 'avatar' => 'rodo.jpg'
        ]);
    }
}
