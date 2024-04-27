<?php

namespace App\Http\Controllers;

use App\Models\MatriberoModel;
use App\Models\ProiberoModel;
use Illuminate\Http\Request;

class MatriberoController extends Controller
{

    public function create()
    {
        $matribero  = MatriberoModel::paginate(100);

        $totalMatribero = MatriberoModel::count();
        return view('admin.Ibero.Modulo_Matricula.matribero', compact('matribero', 'totalMatribero', 'query'));
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
        $Matribero = new MatriberoModel();
        // Asignar los valores a los atributos del modelo
        $Matribero->nombres = $request->input('nombres');
        $Matribero->apellidos =  $request->input('apellidos');
        $Matribero->sexo = $sexoString;
        $Matribero->identificacion =  $request->input('identificacion');
        $Matribero->documento =  $request->input('documento');
        $Matribero->lugarexpe =  $request->input('lugarexpe');
        $Matribero->fechaexpe =  $request->input('fechaexpe');
        $Matribero->nacimiento =  $request->input('nacimiento');
        $Matribero->nacifecha =  $request->input('nacifecha');
        $Matribero->direccion =  $request->input('direccion');
        $Matribero->estrato = $request->input('estrato');
        $Matribero->correo =  $request->input('correo');
        $Matribero->celular1 =  $request->input('celular1');
        $Matribero->celular2 =  $request->input('celular2');
        $Matribero->institucion =  $request->input('institucion');
        $Matribero->titulo =  $request->input('titulo');
        $Matribero->año =  $request->input('año');
        $Matribero->institucion2 =  $request->input('instituto2');
        $Matribero->titulo2 =  $request->input('titulo2');
        $Matribero->año2 =  $request->input('año2');

        $programa = ProiberoModel::where('id', $request->input('programa'))->first();
        $Matribero->programa = $programa->programa;
        $Matribero->modalidad = $programa->metodologia;

        $Matribero->save();
        return redirect(route('infoibero2', ['id' => $request->id_programa]));
    }
    public function search(Request $request)
    {
        $query = $request->input('q');
        $matribero = MatriberoModel::where('nombres', 'LIKE', "%$query%")
            ->orWhere('apellidos', 'LIKE', "%$query%")
            ->orWhere('documento', 'LIKE', "%$query%")
            ->paginate(10);

        $totalMatribero = MatriberoModel::count();

        return view('admin.Ibero.Modulo_Matricula.matribero', compact('matribero', 'totalMatribero', 'query'));
    }
}
