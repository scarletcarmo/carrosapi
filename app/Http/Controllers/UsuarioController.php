<?php
namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::get();
        return Response()->json($usuarios, 200);
    }

    public function getById($id){
        $usuario = Usuario::find($id);
        return Response()->json($usuario, 200);
    }

    public function store(Request $request){
        $input = $request->all();
        $usuario = Usuario::create($input);
        return Response()->json($usuario, 201);
    }
}