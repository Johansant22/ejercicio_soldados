<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function mostrar() {
        return view('frmCompania');
    }
    function store(Request $request) {
        $compañia = new Company();
        $compañia->actividad_principal = $request->actividad_principal;
        $compañia->save();
        return $compañia;
    }
}
