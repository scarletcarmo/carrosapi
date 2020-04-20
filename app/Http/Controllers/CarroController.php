<?php
namespace App\Http\Controllers;

use App\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {   
        $carros = Carro::get();
        return Response()->json($carros, 200);
    }

    public function getById($id)
    {
        $carro = Carro::find($id);
        return Response()->json($carro, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $carro = Carro::create($input);
        return Response()->json($carro, 201);
    }
}
