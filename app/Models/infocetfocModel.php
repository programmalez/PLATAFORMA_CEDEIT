<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class infocetfocModel extends Model
{
    protected $table='infocetfoc';
    protected $fillable = [
                           'nombres',
                           'apellidos',
                           'tipo_documento',
                           'documento',
                           'lugar',
                           'celular',
                           'correo',
                           'programa',
                           'como_se_entero'
                           ];
}

