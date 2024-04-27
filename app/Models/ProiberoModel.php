<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProiberoModel extends Model
{
    protected $table='proibero';
    protected $fillable = [
                   'programa',
                   'codigo',
                   'formacion',
                   'oferta',
                   'profesional',
                   'mercado',
                   'titulo',
                   'creditos',
                   'metodologia',
                   'semestre',
                   'texto',
                   'imagen',
                   'documento',
                   ];
}
