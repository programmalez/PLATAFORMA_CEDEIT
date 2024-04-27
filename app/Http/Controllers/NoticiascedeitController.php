<?php

namespace App\Http\Controllers;
use App\Models\NoticiascedeitModel;
use Illuminate\Pagination\LengthAwarePaginator;


use Illuminate\Http\Request;

class NoticiascedeitController extends Controller
{
    public function index(){

        return view('Barra-Navegacion.layouts.app', compact('noticias'));
    }

    public function Noticias(){
        $noticias = NoticiascedeitModel::paginate(2);
        return view('Barra-Navegacion.Noticias.Noticiascedeit', ['noticias' => $noticias]);
    }
    public function Vermas($id){
        $noticia = NoticiascedeitModel::findOrFail($id);
        return view('Barra-Navegacion.Noticias.vermascedeit', compact('noticia','id'));
    }
    public function create(){
        $noticias =  NoticiascedeitModel::all();
        return view('admin.Cedeit.Modulo_Noticias.noticiascreate',compact('noticias'));
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
         $noticias = new NoticiascedeitModel();
            $noticias-> nombre = $request->input('nombre');
            $noticias-> imagen = $nombrearchivo;
            $noticias-> fecha_publicacion = $request->input('fecha_publicacion');
            $noticias-> hora_publicacion = $request->input('hora_publicacion');
            $noticias-> texto = $request->input('texto');
            $noticias-> autor = $request->input('autor');
            $noticias-> enlace = $request->input('enlace');

            $noticias->save();
            $noticias = NoticiascedeitModel::all();
        return view('admin.Cedeit.Modulo_Noticias.noticiascreate',compact('noticias','Imagenes'));
    }
    public function edit($id)
    {
        // Lógica para cargar los datos de la noticia a editar en el formulario
        $noticia = NoticiascedeitModel::find($id);
        return view('admin.Cedeit.Modulo_Noticias.noticiasedit', compact('noticia'));
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

        $noticia = NoticiascedeitModel::findOrFail($id);

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

        return redirect()->route('noticiascre');
    }
    public function destroy($id)
    {
        NoticiascedeitModel::destroy($id);
        // Lógica para eliminar la noticia
        return view('admin.Cedeit.Modulo_Noticias.noticiascreate',compact('noticia'));
    }
    public function search(Request $request)
    {
        $query = $request->input('q');
        $noticias = NoticiascedeitModel::where('nombre', 'LIKE', "%$query%")
            ->orWhere('texto', 'LIKE', "%$query%")
            ->orWhere('autor', 'LIKE', "%$query%")
            ->paginate(10);

        $totalnoticias = NoticiascedeitModel::count();

        return view('Barra-Navegacion.Noticias.Noticiascedeit', compact('noticias', 'totalnoticias','query'));
    }
}
