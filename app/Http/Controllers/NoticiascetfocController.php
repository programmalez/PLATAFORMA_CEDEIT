<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoticiascetfocModel;
use Illuminate\Support\Facades\Session;

class NoticiascetfocController extends Controller
{
    public function index(){
        $noticias =  NoticiascetfocModel::select('id','nombre','imagen','fecha_publicacion','hora_publicacion','texto','autor','enlace')->get();

        return view('Barra-Navegacion.Quienes-Somos.cetfoc', ['noticias' => $noticias ?? '']);
    }
    public function Noticias(){
        return view('Barra-Navegacion.Noticias.Noticiascetfoc');
    }
    public function Vermas($id){
        $noticia = NoticiascetfocModel::findOrFail($id);
        return view('Barra-Navegacion.Noticias.vermascetfoc', compact('noticia','id'));
    }
    public function create(){
        $noticias =  NoticiascetfocModel::all();
        return view('admin.Cetfoc.Modulo_Noticias.noticiascreate',compact('noticias'));
    }
    public function store(Request $request){
        // Lógica para guardar los datos de la noticia
        //dd($request->all());
        $request->validate([
            'nombre' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fecha_publicacion' => 'required|date',
            'hora_publicacion' => 'required',
            'texto' => 'required',
            'autor' => 'required',
            'enlace' => 'required',

        ]);

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $nombrearchivo = time()."_".$file->getClientOriginalName();

            $destinoImagen = public_path('Imagenes');
            $file->move($destinoImagen, $nombrearchivo);
        }
         $noticias = new NoticiascetfocModel();
            $noticias-> nombre = $request->input('nombre');
            $noticias-> imagen = $nombrearchivo;
            $noticias-> fecha_publicacion = $request->input('fecha_publicacion');
            $noticias-> hora_publicacion = $request->input('hora_publicacion');
            $noticias-> texto = $request->input('texto');
            $noticias-> autor = $request->input('autor');
            $noticias-> enlace = $request->input('enlace');

            $noticias->save();
            $noticias = NoticiascetfocModel::all();
            Session::flash('success', 'Se registró la noticia correctamente.');

        return view('admin.Cetfoc.Modulo_Noticias.noticiascreate',compact('Imagenes'));
    }
    public function edit($id)
    {
        // Lógica para cargar los datos de la noticia a editar en el formulario
        $noticia = NoticiascetfocModel::find($id);
        return view('admin.Cetfoc.Modulo_Noticias.noticiasedit', compact('noticia'));
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar la noticia
        $request->validate([
            'nombre' => 'required',
            'fecha_publicacion' => 'required|date',
            'hora_publicacion' => 'required', // Ajusta la regla según tus necesidades
            'texto' => 'required',
            'autor' => 'required',
            'enlace' => 'required',
            // Otros campos y reglas de validación
        ]);

        $noticia = NoticiascetfocModel::findOrFail($id);

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

        return redirect()->route('noticiascre2');
    }
    public function destroy($id)
    {
        NoticiascetfocModel::destroy($id);
        // Lógica para eliminar la noticia
        return view('admin.Cetfoc.Modulo_Noticias.noticiascreate',compact('noticia'));
    }
}
