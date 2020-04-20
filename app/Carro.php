<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = 'carro';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'color',
        'placa',
    ];
}   