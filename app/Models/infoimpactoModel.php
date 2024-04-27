<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class infoimpactoModel extends Model
{
    protected $table='infoimpacto';
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
