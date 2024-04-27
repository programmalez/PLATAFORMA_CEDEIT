<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreimpactoController extends Controller
{
    public function index(){
        return view('Barra-Navegacion.Programas.informacion.Noticiasimpacto');
    }
    public function Preimpacto(){
        return view('admin.Impacto.Modulo_Preinscripcion.preimpacto');
    }
}
