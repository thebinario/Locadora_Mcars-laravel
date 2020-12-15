<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carros extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'modelo', 'placa'
    ];
}
