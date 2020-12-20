<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cpf'
    ];
}
