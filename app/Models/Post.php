<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    //Campos que siempre se deben de registrar
    //Campos en los que hago cambios
    protected $fillable = [
        'content',
    ];
}
