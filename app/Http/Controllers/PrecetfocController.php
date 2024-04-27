<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrecetfocController extends Controller
{
    public function index(){
        return view('Barra-Navegacion.Programas.informacion.Noticiascetfoc');
    }
    public function Precetfoc(){
        return view('admin.Cetfoc.Modulo_Preinscripcion.precetfoc');
    }
}
