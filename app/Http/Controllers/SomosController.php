<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomosController extends Controller
{
    public function quienesSomos(){
        return view('');
    }
    public function Cetfoc(){

        return view('Barra-Navegacion.Quienes-Somos.cetfoc');
    }
    public function Cetfoc1(){
        return view('Barra-Navegacion.conocenos.conocenos_cetfoc');
    }

    public function Impacto(){

        return view('Barra-Navegacion.Quienes-Somos.Impacto');
    }
    public function Impacto1(){
        return view('Barra-Navegacion.conocenos.conocenos_impacto');
    }
    public function Cedeit(){
        return view('Barra-Navegacion.conocenos.conocenos_cedeit');
    }
    
}
