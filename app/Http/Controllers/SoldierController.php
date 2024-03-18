<?php

namespace App\Http\Controllers;

use App\Models\Soldier;
use Illuminate\Http\Request;

class SoldierController extends Controller
{
    function mostrar() {
        return view('frmsoldado');
    }
    function store(Request $request) {
        $soldado = new Soldier();
        $soldado->nombres = $request->nombres;
        $soldado->apellidos = $request->apellidos;
        $soldado->grado = $request->grado;
        $soldado->save();
        return $soldado;
}
}
