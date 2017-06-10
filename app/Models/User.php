<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //Campos que siempre se deben de registrar
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // Campos que quiero que se oculten cuando obtengo un usuario
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Otra relación :)
    //UN usuario puede tener
    //muchos posts
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
