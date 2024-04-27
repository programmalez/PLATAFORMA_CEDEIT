<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class infoiberoModel extends Model
{
    protected $table='infoibero';
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
