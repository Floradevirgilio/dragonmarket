<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [ 'first_name', 'last_name', 'email', 'password', 'avatar', 'admin' ]; // permito que esos campos se puedan llenar

    public function cart()
    {
        return $this->hasOne('App\Models\Cart'); // un user tiene un carrito
    }

    public function getAvatarUrl()
    {
        if ($this->photo_extension)
            return asset('images/users/'.$this->id.'.'.$this->photo_extension);

        return asset('images/users/default.jpg');
    }
}
