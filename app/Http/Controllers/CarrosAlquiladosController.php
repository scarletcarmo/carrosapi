<?php

namespace App\Http\Controllers;

use App\CarrosAlquilados;
use Illuminate\Http\Request;

class CarrosAlquiladosController extends Controller
{   
    public function index()
    {
        $carros = CarrosAlquilados::get();
        foreach($carros as $carro)$carro->carro; 
        return Response()->json($carros, 200);
    }

    public function getById($usuario_id){
        $carros = CarrosAlquilados::where('usuario_id', $usuario_id)->get();
        foreach($carros as $carro) $carro->carro;
        return Response()->json($carros, 200);
    }

    public function store(Request $request){
        $input = $request->all();
        $alquilados = CarrosAlquilados::create($input);
        return Response()->json($alquilados, 201);
    }
}
