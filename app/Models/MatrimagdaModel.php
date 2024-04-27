<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatrimagdaModel extends Model
{
    protected $table='Matrimagda';
    protected $fillable = [
        'nombres',
        'apellidos',
        'sexo',
        'identificacion',
        'documento',
        'lugarexpe',
        'fechaexpe',
        'lugarnaci',
        'nacimiento',
        'nacifecha',
        'direccion',
        'estrato',
        'correo',
        'celular1',
        'celular2',
        'institucion',
        'titulo',
        'año',
        'institucion2',
        'titulo2',
        'año2',
        'programa'

    ];
}
