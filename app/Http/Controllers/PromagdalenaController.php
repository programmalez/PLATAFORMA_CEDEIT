<?php

namespace App\Http\Controllers;

use App\Models\PromagdalenaModel;
use Illuminate\Http\Request;

class PromagdalenaController extends Controller
{
    public function index()
    {
        return view('admin.Magdalena.Modulo_Cursos.cursmagdalena');
    }
    public function Infomagda($id)
    {
        $progmag = PromagdalenaModel::findOrFail($id);
        return view('Barra-Navegacion.Programas.informacion.infomagda', compact('progmag', 'id'));
    }

    public function store(Request $request)
    {
        // Ajustar la configuración de PHP para el tamaño de carga
        ini_set('post_max_size', '32M');
        ini_set('upload_max_filesize', '32M');
        $request->validate([

            'programa' => 'required',
            'facultad' => 'required',
            'codigo' => 'required|numeric',
            'formacion' => 'required',
            'oferta' => 'required',
            'profesional' => 'required',
            'ocupacional' => 'required',
            'titulo' => 'required',
            'registro' => 'required',
            'creditos' => 'required|numeric',
            'metodologia' => 'required',
            'semestre' => 'required',
            'texto' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:204800',
            'documento' => 'required|file|mimes:pdf,doc,docx|max:204800',

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

        $progmagdalena = new PromagdalenaModel();
        $progmagdalena->programa = $request->input('programa');
        $progmagdalena->facultad = $request->input('facultad');
        $progmagdalena->codigo = $request->input('codigo');
        $progmagdalena->formacion = $request->input('formacion');
        $progmagdalena->oferta = $request->input('oferta');
        $progmagdalena->profesional = $request->input('profesional') ?? 'ValorPredeterminado';
        $progmagdalena->ocupacional = $request->input('ocupacional') ?? 'ValorPredeterminado';
        $progmagdalena->titulo = $request->input('titulo');
        $progmagdalena->registro = $request->input('registro');
        $progmagdalena->creditos = $request->input('creditos');
        $progmagdalena->metodologia  = $request->input('metodologia');
        $progmagdalena->semestre  = $request->input('semestre');
        $progmagdalena->texto  = $request->input('texto');
        $progmagdalena->imagen = $nombrearchivo;
        $progmagdalena->documento = $nombrearchivo1;

        $progmagdalena->save();
        return view('admin.Magdalena.Modulo_Cursos.cursmagdalena', compact('Imagenes', 'Documentos'));
    }
    public function edit($id)
    {
        $progmag = PromagdalenaModel::find($id);
        return view('admin.Magdalena.Modulo_Cursos.editmagdalena', compact('progmag'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([

            'programa' => 'required',
            'facultad' => 'required',
            'codigo' => 'required|numeric',
            'formacion' => 'required',
            'oferta' => 'required',
            'profesional' => 'required',
            'ocupacional' => 'required',
            'titulo' => 'required',
            'registro' => 'required',
            'creditos' => 'required|numeric',
            'metodologia' => 'required',
            'semestre' => 'required',
            'texto' => 'required',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:204800',
            'documento' => 'nullable|file|mimes:pdf,doc,docx|max:204800',

        ]);

        $progmag = PromagdalenaModel::find($id);
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $nombrearchivo = time() . "_" . $file->getClientOriginalName();
            $destinoImagen = public_path('Imagenes');
            $file->move($destinoImagen, $nombrearchivo);

            //Eliminar la imagen anterior existente
            if ($progmag->imagen) {
                unlink(public_path('Imagenes/' . $progmag->imagen));
            }
            $progmag->imagen = $nombrearchivo;
        }
        if ($request->hasFile('documento')) {
            $file = $request->file('documento');
            $nombrearchivo1 = time() . "_" . $file->getClientOriginalName();
            $destinoDocumento = public_path('Documentos');
            $file->move($destinoDocumento, $nombrearchivo1);

            //Eliminar el Documento anterior existente
            if ($progmag->documento) {
                unlink(public_path('Documentos/' . $progmag->documento));
            }
            $progmag->documento = $nombrearchivo1;
        }
        $progmag->programa = $request->input('programa');
        $progmag->facultad = $request->input('facultad');
        $progmag->codigo = $request->input('codigo');
        $progmag->formacion = $request->input('formacion');
        $progmag->oferta = $request->input('oferta');
        $progmag->profesional = $request->input('profesional') ?? 'ValorPredeterminado';
        $progmag->ocupacional = $request->input('ocupacional') ?? 'ValorPredeterminado';
        $progmag->titulo = $request->input('titulo');
        $progmag->registro = $request->input('registro');
        $progmag->creditos = $request->input('creditos');
        $progmag->metodologia  = $request->input('metodologia');
        $progmag->semestre  = $request->input('semestre');
        $progmag->texto  = $request->input('texto');

        $progmag->save();
        return redirect()->route('cursmagdalena');
    }

    public function destroy($id)
    {
        PromagdalenaModel::destroy($id);

        return view('admin.Magdalena.Modulo_Cursos.cursmagdalena', compact('cursmagdalena'));
    }
}
