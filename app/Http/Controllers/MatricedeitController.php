<?php

namespace App\Http\Controllers;
use App\Models\MatricedeitModel;
use Illuminate\Http\Request;

class MatricedeitController extends Controller
{
    public function index()
    {

        return view('Barra-Navegacion.Admisiones.Rcedeit');
    }

    public function create()
    {
        $matriculados = MatricedeitModel::paginate(10);
        $totalMatriculados = MatricedeitModel::count();
        return view('admin.Cedeit.Modulo_Matricula.matriculacreate', compact('matriculados', 'totalMatriculados','query'));
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
        'programa' => 'required|string',

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

    $Matricedeit = new MatricedeitModel();
    // Asignar los valores a los atributos del modelo
    $Matricedeit -> nombres1 = $request->input('nombres1');
    $Matricedeit-> nombres2 =  $request->input('nombres2');
    $Matricedeit ->apellido1 =  $request->input('apellido1');
    $Matricedeit -> apellido2 =  $request->input('apellido2');
    $Matricedeit -> identificacion =  $request->input('identificacion');
    $Matricedeit -> documento =  $request->input('documento');
    $Matricedeit -> lugarexpe =  $request->input('lugarexpe');
    $Matricedeit -> fechaexpe =  $request->input('fechaexpe');
    $Matricedeit -> lugarnaci =  $request->input('nacimiento');
    $Matricedeit -> fechanaci =  $request->input('nacifecha');
    $Matricedeit -> edad =  $request->input('edad');
    $Matricedeit -> direccion =  $request->input('direccion');
    $Matricedeit -> municipio =  $request->input('municipio');
    $Matricedeit -> departamento =  $request->input('departamento');
    $Matricedeit -> celular1 =  $request->input('celular1');
    $Matricedeit -> celular2 =  $request->input('celular2');
    $Matricedeit -> correo =  $request->input('correo');
    $Matricedeit -> expulsor =  $request->input('expulsor');
    $Matricedeit -> describa =  $request->input('describa');
    $Matricedeit -> describa2 =  $request->input('describa2');
    $Matricedeit -> describa3 =  $request->input('describa3');
    $Matricedeit -> programa =  $request->input('programa');
    $Matricedeit->estado_civil = $estadoCivilString;
    $Matricedeit -> en_desplazamiento =  $enDesplazamiento;
    $Matricedeit -> desvinculados =  $desvinculados;
    $Matricedeit -> raizales =  $raizales;
    $Matricedeit -> afrocolombianos =  $afrocolombianos;
    $Matricedeit -> indigenas =  $indigenas;
    $Matricedeit -> rom =  $rom;
    $Matricedeit -> fisica =  $fisica;
    $Matricedeit -> cognitiva =  $cognitiva;
    $Matricedeit -> excepciones =  $excepciones;
    $Matricedeit->save();

    return view('Barra-Navegacion.Admisiones.Rcedeit');
    }
    public function search(Request $request)
    {
        $query = $request->input('q');
        $matriculados = MatricedeitModel::where('nombres1', 'LIKE', "%$query%")
            ->orWhere('apellido1', 'LIKE', "%$query%")
            ->orWhere('documento', 'LIKE', "%$query%")
            ->paginate(10);
        
        $totalMatriculados = MatricedeitModel::count();
    
        return view('admin.Cedeit.Modulo_Matricula.matriculatecreate', compact('matriculados', 'totalMatriculados','query'));
    }
    
}
