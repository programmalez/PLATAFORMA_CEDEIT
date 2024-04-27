<?php

namespace App\Http\Controllers;

use App\Models\ProcetModel;
use Exception;
use Illuminate\Http\Request;

class ProcetController extends Controller
{
    public function index()
    {
        return view('admin.Cetfoc.Modulo_Cursos.curscreate');
    }

    public function Infocetfoc($id)
    {
        $procet = ProcetModel::findOrFail($id);
        return view('Barra-Navegacion.Programas.informacion.infocetfoc', compact('procet', 'id'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([

            'curso' => 'required',
            'licencia' => 'required',
            'perfil' => 'required',
            'cuatri' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:20048',
            'documento' => 'required|file|mimes:pdf,doc,docx|max:20048',
            'titulo' => 'required',
            'modalidad' => 'required',
            'texto' => 'required',
        ]);
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $nombrearchivo = time() . "_" . $file->getClientOriginalName();
            $destinoImagen = public_path('Imagenes');
            $file->move($destinoImagen, $nombrearchivo);
        }
        if ($request->hasFile('documento')) {
            $file = $request->file('documento');
            $nombrearchivo1 = time() . "_" . $file->getClientOriginalName();
            $destinoDocumento = public_path('Documentos');
            $file->move($destinoDocumento, $nombrearchivo1);
        }

        $procetfoc = new ProcetModel();
        $procetfoc->curso = $request->input('curso');
        $procetfoc->licencia = $request->input('licencia');
        $procetfoc->perfil = $request->input('perfil');
        $procetfoc->cuatri = $request->input('cuatri');
        $procetfoc->imagen = $nombrearchivo;
        $procetfoc->documento = $nombrearchivo1;
        $procetfoc->titulo = $request->input('titulo');
        $procetfoc->modalidad  = $request->input('modalidad');
        $procetfoc->texto  = $request->input('texto');

        $procetfoc->save();
        return redirect()->route('curscetfoc', compact('Imagenes', 'Documentos'));
    }

    public function show()
    {
        //
    }
    public function edit($id)
    {
        $procet = ProcetModel::find($id);
        return view('admin.Cetfoc.Modulo_Cursos.cursedit', compact('procet'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
                'curso' => 'required',
                'licencia' => 'required',
                'perfil' => 'required',
                'cuatri' => 'required',
                'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20048',
                'documento' => 'nullable|file|mimes:pdf,doc,docx|max:20048',
                'titulo' => 'required',
                'modalidad' => 'required',
                'texto' => 'required',
            ]);


        // Obtener el curso a actualizar
        $procet = ProcetModel::findOrFail($id);
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $nombrearchivo = time() . "_" . $file->getClientOriginalName();
            $destinoImagen = public_path('Imagenes');
            $file->move($destinoImagen, $nombrearchivo);

            //Eliminar la imagen anterior existente
            if ($procet->imagen) {
                unlink(public_path('Imagenes/' . $procet->imagen));
            }
            $procet->imagen = $nombrearchivo;
        }
        if ($request->hasFile('documento')) {
            $file = $request->file('documento');
            $nombrearchivo1 = time() . "_" . $file->getClientOriginalName();
            $destinoDocumento = public_path('Documentos');
            $file->move($destinoDocumento, $nombrearchivo1);

             //Eliminar el Documento anterior existente
             if ($procet->documento) {
                unlink(public_path('Documentos/' . $procet->documento));
            }
            $procet->documento = $nombrearchivo1;
        }

        $procet->curso = $request->input('curso');
        $procet->licencia = $request->input('licencia');
        $procet->perfil = $request->input('perfil');
        $procet->cuatri = $request->input('cuatri');
        $procet->titulo = $request->input('titulo');
        $procet->modalidad  = $request->input('modalidad');
        $procet->texto  = $request->input('texto');
        $procet->save();
        return redirect()->route('curscetfoc');
    }

    public function destroy($id)
    {
        ProcetModel::destroy($id);
        return view('admin.Cetfoc.Modulo_Cursos.curscreate', compact('procet'));
    }
}
