<?php

namespace App\Http\Controllers;

use App\Models\Body;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    function mostrar() {
        return view('frmcuerpo');
    }
    function store(Request $request) {
        $cuerpo = new Body();
        $cuerpo->categoria = $request->categoria;
        $cuerpo->denominacion = $request->denominacion;
        $cuerpo->save();
        return $cuerpo;
    }
}
