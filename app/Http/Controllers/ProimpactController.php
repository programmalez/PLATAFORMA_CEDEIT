<?php

namespace App\Http\Controllers;

use App\Models\ProimpactModel;
use Illuminate\Http\Request;

class ProimpactController extends Controller
{
    public function index()
    {
        return view('admin.Impacto.Modulo_Cursos.curscreate');
    }
    public function Infoimapacto($id){

        $proim = ProimpactModel::findOrFail($id);
        return view('Barra-Navegacion.Programas.informacion.infoimpacto', compact('proim','id'));
    }
   public function store(Request $request)
   {    //dd($request->all());
       $request->validate ([
           
           'curso'=> 'required',
           'licencia'=> 'required',
           'perfil'=>'required',
           'cuatri'=>'required',
           'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
           'documento' => 'required|file|mimes:pdf,doc,docx|max:2048',
           'titulo'=>'required',
           'modalidad'=>'required',
           'texto'=>'required',
       ]);
       if($request->hasFile('imagen')){
           $file = $request->file('imagen');
           $nombrearchivo = time()."_".$file->getClientOriginalName();
           $destinoImagen = public_path('Imagenes');
           $file->move($destinoImagen, $nombrearchivo);
       }        
       if($request->hasFile('documento')){
           $file = $request->file('documento');
           $nombrearchivo1 = time()."_".$file->getClientOriginalName();
           $destinoDocumento = public_path('Documentos');
           $file->move($destinoDocumento, $nombrearchivo1);
       }        
       
       $proimpacto = new ProimpactModel();
       $proimpacto-> curso = $request->input('curso');
       $proimpacto-> licencia = $request->input('licencia');
       $proimpacto-> perfil = $request->input('perfil');
       $proimpacto-> cuatri = $request->input('cuatri');
       $proimpacto-> imagen = $nombrearchivo;
       $proimpacto-> documento = $nombrearchivo1;
       $proimpacto-> titulo = $request->input('titulo');
       $proimpacto-> modalidad  = $request->input('modalidad');
       $proimpacto-> texto  = $request->input('texto');
       $proimpacto->save();
       $proimpacto = ProimpactModel::all();

       return redirect()->route('cursimpacto', compact('Imagenes', 'Documentos'));
       
   }
   public function show()
   {
       //
   }
   public function edit($id)
   {
       $proim = ProimpactModel::find($id);
       return view('admin.Impacto.Modulo_Cursos.cursedit', compact('proim'));
   }
   public function update(Request $request, $id)
   {
       //logica para actualizar la noticia
       $request->validate([
           'curso'=> 'required',
           'licencia'=> 'required',
           'perfil'=>'required',
           'cuatri'=>'required',
           'titulo'=>'required',
           'modalidad'=>'required',
           'texto'=>'required',
       ]);

       $proim = ProimpactModel::findOrfail($id);

       if($request->hasFile('imagen')){
        $file = $request->file('imagen');
        $nombrearchivo = time()."_". $file->getClientOriginalName();
        $destinoImagen = public_path('Imagenes');
        $file->move($destinoImagen, $nombrearchivo);

        //Eliminar la imagen anterior existente
        if($proim->imagen){
            unlink(public_path('Imagenes/' . $proim->imagen));
        }

        $proim->imagen = $nombrearchivo;
    }
    //Actualizar los campos
    $proim->curso = $request->input('curso');
    $proim->licencia = $request->input('licencia');
    $proim->perfil = $request->input('perfil');
    $proim->cuatri = $request->input('cuatri');
    $proim->titulo = $request->input('titulo');
    $proim->modalidad = $request->input('modalidad');
    $proim->texto = $request->input('texto');

    $proim->save();

    return redirect()->route('cursimpacto');
   }

   public function destroy($id)
   {
    ProimpactModel::destroy($id);
       return view('admin.Impacto.Modulo_Cursos.curscreate',compact('proim'));
   }
}


