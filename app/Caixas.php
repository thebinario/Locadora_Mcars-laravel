<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caixas extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'data', 'operacao', 'valor'
    ];
}
