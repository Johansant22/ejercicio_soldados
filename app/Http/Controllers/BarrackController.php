<?php

namespace App\Http\Controllers;

use App\Models\Barrack;
use Illuminate\Http\Request;

class BarrackController extends Controller
{
    function mostrar() {
        return view('frmCuartel');
    }
    function store(Request $request) {
        $cuartel = new Barrack();
        $cuartel->nombre = $request->nombre;
        $cuartel->ubicacion = $request->ubicacion;
        $cuartel->save();
        return $cuartel;
    }
}
