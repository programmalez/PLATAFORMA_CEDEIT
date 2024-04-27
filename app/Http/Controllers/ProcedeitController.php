<?php

namespace App\Http\Controllers;
use App\Models\ProcedModel;
use Illuminate\Http\Request;

class ProcedeitController extends Controller
{
    public function index()
    {
        return view('admin.Cedeit.Modulo_Cursos.cursoscreate');
    }

    public function store(Request $request)
    {
         //dd($request->all());
         $request->validate ([

            'curso'=> 'required',
            'titulo'=>'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $nombrearchivo = time()."_".$file->getClientOriginalName();
            $destinoImagen = public_path('Imagenes');
            $file->move($destinoImagen, $nombrearchivo);
        }

        $procedeit = new ProcedModel();
        $procedeit -> curso = $request->input('curso');
        $procedeit -> titulo = $request->input('titulo');
        $procedeit-> imagen = $nombrearchivo;

        $procedeit ->save();

        return redirect()->route('curscedeit', compact('Imagenes'));
    }

    public function edit($id)
    {
        $proced = ProcedModel::find($id);
        return view('admin.Cedeit.Modulo_Cursos.cursosedit', compact('proced'));
    }

    public function update(Request $request, $id)
{
    // Lógica para actualizar el curso
    $request->validate([
        'curso' => 'required',
        'titulo' => 'required',
    ]);

    $proced = ProcedModel::findOrFail($id);

    if ($request->hasFile('imagen')) {
        $file = $request->file('imagen');
        $nombrearchivo = time() . "_" . $file->getClientOriginalName();
        $destinoImagen = public_path('Imagenes');
        $file->move($destinoImagen, $nombrearchivo);

        // Eliminar la imagen anterior si existe
        if ($proced->imagen) {
            unlink(public_path('Imagenes/' . $proced->imagen));
        }

        $proced->imagen = $nombrearchivo;
    }

    $proced->curso = $request->input('curso');
    $proced->titulo = $request->input('titulo');
    $proced->save();

    // Redirigir a la ruta deseada con el parámetro 'id'
    return redirect()->route('curscedeit', ['id' => $id])->with('success', 'Curso actualizado exitosamente.');
}


    public function destroy($id)
    {
        ProcedModel::destroy($id);
        return view('admin.Cedeit.Modulo_Cursos.cursoscreate', compact('proced'));
    }
}
