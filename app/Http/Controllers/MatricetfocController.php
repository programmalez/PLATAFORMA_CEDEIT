<?php

namespace App\Http\Controllers;


use App\Models\MatricetfocModel;
use Illuminate\Http\Request;

class MatricetfocController extends Controller
{

    public function index()
    {

        return view('Barra-Navegacion.Admisiones.Rcetfoc');
    }

    public function create()
    {
        $matriculados = MatricetfocModel::paginate(10);
        $totalMatriculados = MatricetfocModel::count();
        return view('admin.Cetfoc.Modulo_Matricula.Matricetfoc', compact('matriculados', 'totalMatriculados','query'));
    }

    public function store(Request $request)
    {
        //validar los datos del formulario
       // dd($request->all());
        $validatedData = $request->validate([
            'nombres1' => 'required|string',
            'nombres2' => 'required|string',
            'apellido1' => 'required|string',
            'apellido2' => 'required|string',
            'identificacion' => 'required|string',
            'documento' => 'required|numeric|digits_between:1,20',
            'lugarexpe' => 'required|string',
            'fechaexpe' => 'required|date',
            'nacimiento' => 'required|string',
            'nacifecha' => 'required|date',
            'edad' => 'required|numeric',
            'direccion' => 'required|string',
            'municipio' => 'required|string',
            'departamento' => 'required|string',
            'celular1' => 'required|numeric',
            'celular2' => 'required|numeric',
            'correo' => 'required|email|string',
            'expulsor' => 'required|string',
            'describa' => 'required|string',
            'describa2' => 'required|string',
            'describa3' => 'required|string',
            'programa'=>'required|string',


        ]);

        $estadoCivil = [];
        if ($request->has('soltero')) {
        $estadoCivil[] = 'Soltero';
        }
        if ($request->has('casado')) {
        $estadoCivil[] = 'Casado';
        }
        if ($request->has('otro')) {
        $estadoCivil[] = 'Otro';
        }
        $estadoCivilString = implode(', ', $estadoCivil);
        $enDesplazamiento = $request->has('desplazamiento') ? true : false;
        $desvinculados = $request->has('desvinculados') ? true : false;
        $raizales = $request->has('raizales') ? true : false;
        $afrocolombianos = $request->has('afrocolombianos') ? true : false;
        $indigenas = $request->has('indigenas') ? true : false;
        $rom = $request->has('rom') ? true : false;
        $fisica = $request->has('fisica') ? true : false;
        $cognitiva = $request->has('cognitiva') ? true : false;
        $excepciones = $request->has('excepciones') ? true : false;

        $Matricetfoc = new MatricetfocModel();
        // Asignar los valores a los atributos del modelo
        $Matricetfoc -> nombres1 = $request->input('nombres1');
        $Matricetfoc-> nombres2 =  $request->input('nombres2');
        $Matricetfoc ->apellido1 =  $request->input('apellido1');
        $Matricetfoc -> apellido2 =  $request->input('apellido2');
        $Matricetfoc -> identificacion =  $request->input('identificacion');
        $Matricetfoc -> documento =  $request->input('documento');
        $Matricetfoc -> lugarexpe =  $request->input('lugarexpe');
        $Matricetfoc -> fechaexpe =  $request->input('fechaexpe');
        $Matricetfoc -> lugarnaci =  $request->input('nacimiento');
        $Matricetfoc -> fechanaci =  $request->input('nacifecha');
        $Matricetfoc -> edad =  $request->input('edad');
        $Matricetfoc -> direccion =  $request->input('direccion');
        $Matricetfoc -> municipio =  $request->input('municipio');
        $Matricetfoc -> departamento =  $request->input('departamento');
        $Matricetfoc -> celular1 =  $request->input('celular1');
        $Matricetfoc -> celular2 =  $request->input('celular2');
        $Matricetfoc -> correo =  $request->input('correo');
        $Matricetfoc -> expulsor =  $request->input('expulsor');
        $Matricetfoc -> describa =  $request->input('describa');
        $Matricetfoc -> describa2 =  $request->input('describa2');
        $Matricetfoc -> describa3 =  $request->input('describa3');
        $Matricetfoc  -> programa =  $request->input('programa');
        $Matricetfoc->estado_civil = $estadoCivilString;
        $Matricetfoc -> en_desplazamiento =  $enDesplazamiento;
        $Matricetfoc -> desvinculados =  $desvinculados;
        $Matricetfoc -> raizales =  $raizales;
        $Matricetfoc -> afrocolombianos =  $afrocolombianos;
        $Matricetfoc -> indigenas =  $indigenas;
        $Matricetfoc -> rom =  $rom;
        $Matricetfoc -> fisica =  $fisica;
        $Matricetfoc -> cognitiva =  $cognitiva;
        $Matricetfoc -> excepciones =  $excepciones;
        $Matricetfoc->save();

        return view('Barra-Navegacion.Admisiones.Rcetfoc');
    }

    public function search(Request $request)
{
    $query = $request->input('q');
    $matriculados = MatricetfocModel::where('nombres1', 'LIKE', "%$query%")
        ->orWhere('apellido1', 'LIKE', "%$query%")
        ->orWhere('documento', 'LIKE', "%$query%")
        ->paginate(10);

    $totalMatriculados = MatricetfocModel::count();

    return view('admin.Cetfoc.Modulo_Matricula.Matricetfoc', compact('matriculados', 'totalMatriculados','query'));
}

}
