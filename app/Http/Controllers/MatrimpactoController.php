<?php

namespace App\Http\Controllers;

use App\c;
use App\Models\MatrimpactoModel;
use Illuminate\Http\Request;

class MatrimpactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Barra-Navegacion.Admisiones.Rimpacto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matriculados2 = MatrimpactoModel::paginate(10);
        $totalMatriculados2 = MatrimpactoModel::count();
        return view('admin.Impacto.Modulo_matricula.Matrimpacto', compact('matriculados2', 'totalMatriculados2','query'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //dd($request->all());
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

        $Matrimpacto = new \App\Models\MatrimpactoModel();
        // Asignar los valores a los atributos del modelo
        $Matrimpacto -> nombres1 = $request->input('nombres1');
        $Matrimpacto-> nombres2 =  $request->input('nombres2');
        $Matrimpacto ->apellido1 =  $request->input('apellido1');
        $Matrimpacto -> apellido2 =  $request->input('apellido2');
        $Matrimpacto -> identificacion =  $request->input('identificacion');
        $Matrimpacto -> documento =  $request->input('documento');
        $Matrimpacto -> lugarexpe =  $request->input('lugarexpe');
        $Matrimpacto -> fechaexpe =  $request->input('fechaexpe');
        $Matrimpacto -> lugarnaci =  $request->input('nacimiento');
        $Matrimpacto -> fechanaci =  $request->input('nacifecha');
        $Matrimpacto -> edad =  $request->input('edad');
        $Matrimpacto -> direccion =  $request->input('direccion');
        $Matrimpacto -> municipio =  $request->input('municipio');
        $Matrimpacto -> departamento =  $request->input('departamento');
        $Matrimpacto -> celular1 =  $request->input('celular1');
        $Matrimpacto -> celular2 =  $request->input('celular2');
        $Matrimpacto -> correo =  $request->input('correo');
        $Matrimpacto -> expulsor =  $request->input('expulsor');
        $Matrimpacto -> describa =  $request->input('describa');
        $Matrimpacto -> describa2 =  $request->input('describa2');
        $Matrimpacto -> describa3 =  $request->input('describa3');
        $Matrimpacto -> programa =  $request->input('programa');
        $Matrimpacto->estado_civil = $estadoCivilString;
        $Matrimpacto -> en_desplazamiento =  $enDesplazamiento;
        $Matrimpacto -> desvinculados =  $desvinculados;
        $Matrimpacto -> raizales =  $raizales;
        $Matrimpacto -> afrocolombianos =  $afrocolombianos;
        $Matrimpacto -> indigenas =  $indigenas;
        $Matrimpacto -> rom =  $rom;
        $Matrimpacto -> fisica =  $fisica;
        $Matrimpacto -> cognitiva =  $cognitiva;
        $Matrimpacto -> excepciones =  $excepciones;
        $Matrimpacto->save();

        return view('Barra-Navegacion.Admisiones.Rimpacto');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $matriculados2 = MatrimpactoModel::where('nombres1', 'LIKE', "%$query%")
            ->orWhere('apellido1', 'LIKE', "%$query%")
            ->orWhere('documento', 'LIKE', "%$query%")
            ->paginate(10);
        
        $totalMatriculados2 = MatrimpactoModel::count();
    
        return view('admin.Impacto.Modulo_Matricula.Matrimpacto', compact('matriculados2', 'totalMatriculados2','query'));
    }
    
}
