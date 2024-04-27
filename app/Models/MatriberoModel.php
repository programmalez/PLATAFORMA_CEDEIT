<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatriberoModel extends Model
{
    protected $table='Matribero';
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
