<?php

namespace App\Http\Controllers;

use App\Models\infomagdaModel;
use Illuminate\Http\Request;

class InfomagdaController extends Controller
{
    public function Infomagda(){

        return view('Barra-Navegacion.Programas.informacion.infomagda');
    }
    public function Magda(){

      return view('Barra-Navegacion.Programas.magda');
    }
    public function Premagda(){
        $Preinscritos = infomagdaModel::paginate(100);
        $totalPreinscritos = infomagdaModel::count();
        return view('admin.Magdalena.Modulo_Preinscripcion.Premagda', compact('Preinscritos', 'totalPreinscritos','query'));
    }

    public function store(Request $request)
    {
         //dd($request->all());
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
    $premagda = new infomagdaModel();

    // Asignar los valores a los atributos del modelo
    $premagda->nombres = $request->input('nombres');
    $premagda->apellidos = $request->input('apellidos');
    $premagda->tipo_documento = $request->input('identificacion');
    $premagda->numero_documento = $request->input('documento');
    $premagda->direccion = $request->input('lugar');
    $premagda->celular = $request->input('celular');
    $premagda->correo = $request->input('correo');
    $premagda->programa = $request->input('programa');
    $premagda->como_se_entero = $request->input('como_se_entero');

    // Guardar el registro en la base de datos
    $premagda->save();

    // Redireccionar a la página deseada
    return redirect()->route('home')->with('success', 'El formulario se ha enviado correctamente.');
}
public function search(Request $request)
{
    $query = $request->input('q');
    $Preinscritos = infomagdaModel::where('nombres', 'LIKE', "%$query%")
        ->orWhere('apellidos', 'LIKE', "%$query%")
        ->orWhere('documento', 'LIKE', "%$query%")
        ->paginate(10);

    $totalPreinscritos = infomagdaModel::count();

    return view('admin.Magdalena.Modulo_Preinscripcion.Premagda', compact('Preinscritos', 'totalPreinscritos','query'));
}
}
