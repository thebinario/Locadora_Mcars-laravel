<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custos extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'valor', 'descricao'
        //carro_id
    ];
}
