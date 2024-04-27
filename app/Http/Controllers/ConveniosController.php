<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConveniosController extends Controller
{
    public function index(){

        return view("Barra-Navegacion.Convenios.convenios");
    }
}
