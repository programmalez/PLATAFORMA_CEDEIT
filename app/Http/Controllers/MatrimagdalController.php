<?php

namespace App\Http\Controllers;

use App\Models\MatrimagdaModel;
use App\Models\ProiberoModel;
use App\Models\PromagdalenaModel;
use Illuminate\Http\Request;

class MatrimagdalController extends Controller
{

    public function create()
    {
        $matrimagda  = MatrimagdaModel::paginate(100);
        $totalMatrimagda = MatrimagdaModel::count();
        return view('admin.Magdalena.Modulo_Matricula.matrimagdalena', compact('matrimagda', 'totalMatrimagda', 'query'));
    }
    public function store(Request $request)
    {
        //validar los datos del formulario

        $validatedData = $request->validate([
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
            'sexo' => 'required|string',
            'identificacion' => 'required|string',
            'documento' => 'required|numeric|digits_between:1,20',
            'lugarexpe' => 'required|string',
            'fechaexpe' => 'required|date',
            'nacimiento' => 'required|string',
            'nacifecha' => 'required|date',
            'direccion' => 'required|string',
            'estrato' => 'required|numeric',
            'correo' => 'required|email|string',
            'celular1' => 'required|numeric',
            'celular2' => 'required|numeric',
            'institucion' => 'required|string',
            'titulo' => 'required|string',
            'año' => 'required|numeric',
            'instituto2' => 'required|string',
            'titulo2' => 'required|string',
            'año2' => 'required|numeric',
            'programa' => 'required|string',

        ]);


        $sexoString = $request->input('sexo');
        $Matrimagda = new MatrimagdaModel();
        // Asignar los valores a los atributos del modelo
        $Matrimagda->nombres = $request->input('nombres');
        $Matrimagda->apellidos =  $request->input('apellidos');
        $Matrimagda->sexo = $sexoString;
        $Matrimagda->identificacion =  $request->input('identificacion');
        $Matrimagda->documento =  $request->input('documento');
        $Matrimagda->lugarexpe =  $request->input('lugarexpe');
        $Matrimagda->fechaexpe =  $request->input('fechaexpe');
        $Matrimagda->nacimiento =  $request->input('nacimiento');
        $Matrimagda->nacifecha =  $request->input('nacifecha');
        $Matrimagda->direccion =  $request->input('direccion');
        $Matrimagda->estrato = $request->input('estrato');
        $Matrimagda->correo =  $request->input('correo');
        $Matrimagda->celular1 =  $request->input('celular1');
        $Matrimagda->celular2 =  $request->input('celular2');
        $Matrimagda->institucion =  $request->input('institucion');
        $Matrimagda->titulo =  $request->input('titulo');
        $Matrimagda->año =  $request->input('año');
        $Matrimagda->institucion2 =  $request->input('instituto2');
        $Matrimagda->titulo2 =  $request->input('titulo2');
        $Matrimagda->año2 =  $request->input('año2');

        $programa = PromagdalenaModel::where('id', $request->input('programa'))->first();
        $Matrimagda->programa = $programa->programa;
        $Matrimagda->modalidad = $programa->metodologia;

        $Matrimagda->save();

        return redirect(route('infoibero2', ['id' => $request->id_programa]));
    }
    public function search(Request $request)
    {
        $query = $request->input('q');
        $matrimagda = MatrimagdaModel::where('nombres1', 'LIKE', "%$query%")
            ->orWhere('apellido1', 'LIKE', "%$query%")
            ->orWhere('documento', 'LIKE', "%$query%")
            ->paginate(10);

        $totalMatrimagda = MatrimagdaModel::count();

        return view('admin.Magdalena.Modulo_Matricula.matrimagdalena', compact('matrimagda', 'totalMatrimagda', 'query'));
    }
}
