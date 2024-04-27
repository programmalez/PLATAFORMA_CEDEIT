<?php

namespace App\Http\Controllers;
use App\Models\NoticiasimpactoModel;

use Illuminate\Http\Request;

class NoticiasimpactoController extends Controller
{
    public function index(){
        $noticias =  NoticiasimpactoModel::select('id','nombre','imagen','fecha_publicacion','hora_publicacion','texto','autor','enlace')->get();
        
        return view('Barra-Navegacion.Quienes-Somos.impacto', ['noticias' => $noticias ?? '']);
    }
    public function Noticias(){
        return view('Barra-Navegacion.Noticias.Noticiasimpacto', ['noticias' => $noticias ?? '']);
    }
    public function create(){
        $noticias =  NoticiasimpactoModel::all();
        return view('admin.Impacto.Modulo_Noticias.noticiascreate',compact('noticias'));
    }
    public function Vermas($id){
        $noticia = NoticiasimpactoModel::findOrFail($id);
        return view('Barra-Navegacion.Noticias.vermasimpact', compact('noticia','id'));
    }
    public function store(Request $request){
        //dd($request->all());
        $request->validate([
            'nombre' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fecha_publicacion' => 'required|date',
            'hora_publicacion' => 'required', // Asegúrate de ajustar la regla según tus necesidades
            'texto' => 'required',
            'autor' => 'required',
            'enlace' => 'required',
            // Otros campos y reglas de validación
        ]);
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $nombrearchivo = time()."_".$file->getClientOriginalName();
            $destinoImagen = public_path('Imagenes');
            $file->move($destinoImagen, $nombrearchivo);
        }        
         $noticias = new NoticiasimpactoModel();
            $noticias-> nombre = $request->input('nombre');
            $noticias-> imagen = $nombrearchivo;
            $noticias-> fecha_publicacion = $request->input('fecha_publicacion');
            $noticias-> hora_publicacion = $request->input('hora_publicacion');
            $noticias-> texto = $request->input('texto');
            $noticias-> autor = $request->input('autor');
            $noticias-> enlace = $request->input('enlace');
        
            $noticias->save();
            $noticias = NoticiasimpactoModel::all();

            return redirect()->route('notimpacto', compact('Imagenes'));
        
    }
    public function edit($id)
    {
        // Lógica para cargar los datos de la noticia a editar en el formulario
        $noticia = NoticiasimpactoModel::find($id);
        return view('admin.Impacto.Modulo_Noticias.noticiasedit', compact('noticia'));
    }
    public function update(Request $request, $id)
    {
        // Lógica para actualizar la noticia    
        $request->validate([
            'nombre' => 'required',
            'fecha_publicacion' => 'required|date',
            'hora_publicacion' => 'required',
            'texto' => 'required',
            'autor' => 'required',
            'enlace' => 'required',
            
        ]);
    
        $noticia = NoticiasimpactoModel::findOrFail($id);
    
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $nombrearchivo = time() . "_" . $file->getClientOriginalName();
            $destinoImagen = public_path('Imagenes');
            $file->move($destinoImagen, $nombrearchivo);
    
            // Eliminar la imagen anterior si existe
            if ($noticia->imagen) {
                unlink(public_path('Imagenes/' . $noticia->imagen));
            }
    
            $noticia->imagen = $nombrearchivo;
        }
    
        $noticia->nombre = $request->input('nombre');
        $noticia->fecha_publicacion = $request->input('fecha_publicacion');
        $noticia->hora_publicacion = $request->input('hora_publicacion');
        $noticia->texto = $request->input('texto');
        $noticia->autor = $request->input('autor');
        $noticia->enlace = $request->input('enlace');
    
        $noticia->save();
    
        return redirect()->route('notimpacto');
    }
    public function destroy($id)
    {
        NoticiasimpactoModel::destroy($id);
        // Lógica para eliminar la noticia
        return redirect()->route('notimpacto', compact('noticia'));
    }
}
