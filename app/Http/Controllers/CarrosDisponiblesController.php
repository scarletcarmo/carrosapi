<?php
namespace App\Http\Controllers;

use App\CarrosDisponibles;
use Illuminate\Http\Request;

class CarrosDisponiblesController extends Controller
{
    public function index()
    {
        $carros = CarrosDisponibles::get();
        return Response()->json($carros, 200);
    }

    public function getById($carro_id, $id){
        $carros = CarrosDisponibles::where('carro_id', $carro_id)->where('id', $id)->get();
        $carro = $carros[0];
        $carro->carro;
        return Response()->json($carro, 201);
    }

    public function store(Request $request){
        $input = $request->all();
        $carros = CarrosDisponibles::create($input);
        return Response()->json($carros, 201);
    }
}
