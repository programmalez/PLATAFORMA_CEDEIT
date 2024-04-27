<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\infocetfocModel;

class InfocetfocController extends Controller
{
    public function Infocetfoc(){
        return view('Barra-Navegacion.Programas.informacion.infocetfoc');
    }
    public function store(Request $request)
    {
        
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
            'identificacion' => 'required|string',
            'documento' => 'required|numeric|digits_between:1,20',
            'lugar' => 'required|string',
            'celular' => 'required|numeric|digits_between:1,20',
            'correo' => 'required|email|string',
            'programa' => 'required|string',
            'como_se_entero' => 'required|string',
        ]);
    
        // Crear una nueva instancia de InfoCetfoc
        $precetfoc = new \App\Models\infocetfocModel();
    
        // Asignar los valores a los atributos del modelo
        $precetfoc->nombres = $request->input('nombres');
        $precetfoc->apellidos = $request->input('apellidos');
        $precetfoc->tipo_documento = $request->input('identificacion');
        $precetfoc->numero_documento = $request->input('documento');
        $precetfoc->direccion = $request->input('lugar');
        $precetfoc->celular = $request->input('celular');
        $precetfoc->correo = $request->input('correo');
        $precetfoc->programa = $request->input('programa');
        $precetfoc->como_se_entero = $request->input('como_se_entero');
    
        // Guardar el registro en la base de datos
        $precetfoc->save();
    
        // Redireccionar a la página deseada
        return redirect()->route('home')->with('success', 'El formulario se ha enviado correctamente.');
    }
}
