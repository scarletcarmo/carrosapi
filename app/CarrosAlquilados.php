<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarrosAlquilados extends Model
{
    protected $table = 'carros_alquilados';
    public $timestamps = false;
    protected $fillable = [
        'cantidad_horas',
        'precio_hora',
        'precio_total',
        'usuario_id',
        'carros_id',
    ];

    public function CarrosDisponibles(){
        return $this->hasMany('App\CarrosDisponibles');
    }

    public function Usuario(){
        return $this->hasMany('App\Usuario');
    }
}    