<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrecedeitController extends Controller
{
    public function index(){
        return view('Barra-Navegacion.Programas.informacion.Noticiascedeit');
    }
    public function Precedeit(){
        return view('admin.Cedeit.Modulo_Preinscripcion.preinscripcioncreate');
    }
}
