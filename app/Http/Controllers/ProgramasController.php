<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramasController extends Controller
{
    
    public function Ibero(){
        return view('Barra-Navegacion.Programas.ibero');
    }
    public function Magda(){
        return view('Barra-Navegacion.Programas.magda');
    }
    public function Tecnico_laboral(){
        return view('Barra-Navegacion.Programas.tecnicolaboral_cetfoc');
    }
    public function Tecnico_laboral2(){
        return view('Barra-Navegacion.Programas.tecnicolaboral_impacto');
    }
    public function Formacion_continua(){
        return view('Barra-Navegacion.Programas.formacion_continua');
    }
   
}
