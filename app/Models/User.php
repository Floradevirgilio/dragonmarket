<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $fillable = [ 'first_name', 'last_name', 'email', 'password', 'avatar', 'admin' ]; // permito que esos campos se puedan llenar

    public function carts() {
        return $this->hasOne('App\Cart'); // un user tiene un carrito
    }
}
