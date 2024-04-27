<?php

namespace App\Http\Controllers;
use App\Models\ProiberoModel;
use Illuminate\Http\Request;

class ProiberoController extends Controller
{
    public function index(){
        return view('admin.Ibero.Modulo_Cursos.cursibero');
    }
    public function Infoibero($id){
        $progibe = ProiberoModel::findOrFail($id);

        return view('Barra-Navegacion.Programas.informacion.infoibero', compact('progibe','id'));
    }

    public function store(Request $request){

        $request->validate ([

            'programa'=>'required',
            'codigo'=>'required|numeric',
            'formacion'=>'required',
            'oferta' => 'required',
            'profesional'=>'required',
            'mercado'=>'required',
            'titulo'=>'required',
            'creditos'=>'required|numeric',
            'metodologia'=>'required',
            'semestre'=>'required',
            'texto'=>'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:204800',
            'documento' => 'required|file|mimes:pdf,doc,docx|max:204800',

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

        $progibero = new ProiberoModel();
        $progibero -> programa = $request->input('programa');
        $progibero -> codigo = $request->input('codigo');
        $progibero -> formacion = $request->input('formacion');
        $progibero -> oferta = $request->input('oferta');
        $progibero -> profesional = $request->input('profesional') ?? 'ValorPredeterminado';
        $progibero -> mercado = $request->input('mercado') ?? 'ValorPredeterminado';
        $progibero -> titulo = $request->input('titulo');
        $progibero -> creditos = $request->input('creditos');
        $progibero -> metodologia  = $request->input('metodologia');
        $progibero -> semestre  = $request->input('semestre');
        $progibero -> texto  = $request->input('texto');
        $progibero -> imagen = $nombrearchivo;
        $progibero -> documento = $nombrearchivo1;

        $progibero ->save();
        return redirect()->route('cursibero',compact('Imagenes','Documentos'));

    }
    public function edit($id)
    {
        $progibe = ProiberoModel::find($id);
        return view('admin.Ibero.Modulo_Cursos.editibero', compact('progibe'));
    }

   public function update(Request $request, $id)
   {

    #dd($request->all());

    $request->validate ([

        'programa'=>'required',
        'codigo'=>'required|numeric',
        'formacion'=>'required',
        'oferta' => 'required',
        'profesional'=>'required',
        'mercado'=>'required',
        'titulo'=>'required',
        'creditos'=>'required|numeric',
        'metodologia'=>'required',
        'semestre'=>'required',
        'texto'=>'required',
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:204800',
        'documento' => 'nullable|file|mimes:pdf,doc,docx|max:204800',
    ]);

      $progibe = ProiberoModel::find($id);
      if ($request->hasFile('imagen')) {
        $file = $request->file('imagen');
        $nombrearchivo = time() . "_" . $file->getClientOriginalName();
        $destinoImagen = public_path('Imagenes');
        $file->move($destinoImagen, $nombrearchivo);

        //Eliminar la imagen anterior existente
        if ($progibe->imagen) {
            unlink(public_path('Imagenes/' . $progibe->imagen));
        }
        $progibe->imagen = $nombrearchivo;
    }

    if ($request->hasFile('documento')) {
        $file = $request->file('documento');
        $nombrearchivo1 = time() . "_" . $file->getClientOriginalName();
        $destinoDocumento = public_path('Documentos');
        $file->move($destinoDocumento, $nombrearchivo1);

         //Eliminar el Documento anterior existente
         if ($progibe->documento) {
            unlink(public_path('Documentos/' . $progibe->documento));
        }
        $progibe->documento = $nombrearchivo1;
    }

    $progibe -> programa = $request->input('programa');
    $progibe -> codigo = $request->input('codigo');
    $progibe -> formacion = $request->input('formacion');
    $progibe -> oferta = $request->input('oferta');
    $progibe -> profesional = $request->input('profesional') ?? 'ValorPredeterminado';
    $progibe -> mercado = $request->input('mercado') ?? 'ValorPredeterminado';
    $progibe -> titulo = $request->input('titulo');
    $progibe -> creditos = $request->input('creditos');
    $progibe -> metodologia  = $request->input('metodologia');
    $progibe -> semestre  = $request->input('semestre');
    $progibe -> texto  = $request->input('texto');

    $progibe ->save();
    return redirect()->route('cursibero');
   }

   public function destroy($id)
   {
       ProiberoModel::destroy($id);
       return redirect()->route('cursibero');
   }
}
