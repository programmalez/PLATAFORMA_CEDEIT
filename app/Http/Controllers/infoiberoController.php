<?php

namespace App\Http\Controllers;
use App\Models\infoiberoModel;
use Illuminate\Http\Request;

class infoiberoController extends Controller
{
    public function Infoibero2(){
        return view('Barra-Navegacion.Programas.informacion.infoibero');
    }
    public function Ibero(){

      return view('Barra-Navegacion.Programas.ibero');
    }
    public function Preibero(){
        $Preinscritos1 = infoiberoModel::paginate(100);
        $totalPreinscritos1 = infoiberoModel::count();
        return view('admin.Ibero.Modulo_Preinscripcion.Preibero', compact('Preinscritos1', 'totalPreinscritos1','query'));
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
    $preibero = new infoiberoModel();

    // Asignar los valores a los atributos del modelo
    $preibero->nombres = $request->input('nombres');
    $preibero->apellidos = $request->input('apellidos');
    $preibero->tipo_documento = $request->input('identificacion');
    $preibero->documento = $request->input('documento');
    $preibero->direccion = $request->input('lugar');
    $preibero->celular = $request->input('celular');
    $preibero->correo = $request->input('correo');
    $preibero->programa = $request->input('programa');
    $preibero->como_se_entero = $request->input('como_se_entero');

    // Guardar el registro en la base de datos
    $preibero->save();

    // Redireccionar a la página deseada
    return redirect()->route('home')->with('success', 'El formulario se ha enviado correctamente.');
}
public function search(Request $request)
{
    $query = $request->input('q');
    $Preinscritos1 = infoiberoModel::where('nombres', 'LIKE', "%$query%")
        ->orWhere('apellidos', 'LIKE', "%$query%")
        ->orWhere('documento', 'LIKE', "%$query%")
        ->paginate(10);

    $totalPreinscritos1 = infoiberoModel::count();

    return view('admin.Ibero.Modulo_Preinscripcion.Preibero', compact('Preinscritos1', 'totalPreinscritos1','query'));
}
}
