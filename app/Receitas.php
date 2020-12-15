<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receitas extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'valor'
        //cliente_id
        //carro_id
    ];
}
