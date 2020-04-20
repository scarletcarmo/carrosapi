<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarrosDisponibles extends Model
{
    protected $table = 'carros_disponibles';
    public $timestamps = false;
    protected $fillable = [
        'precio_hora',
        'estado',
        'carro_id',
    ];

    public function Carro(){
        return $this->belongsTo('App\Carro');
    }
}