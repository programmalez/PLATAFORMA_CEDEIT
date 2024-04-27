<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class infomagdaModel extends Model
{
    protected $table='infomagda';
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
