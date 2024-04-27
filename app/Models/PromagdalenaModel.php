<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromagdalenaModel extends Model
{
    protected $table='promagdalena';
    protected $fillable = [
                   'programa',
                   'facultad',
                   'codigo',
                   'formacion',
                   'oferta',
                   'profesional',
                   'ocupacional',
                   'titulo',
                   'registro',
                   'creditos',
                   'metodologia',
                   'semestre',
                   'texto',
                   'imagen',
                   'documento',
                   ];
}
