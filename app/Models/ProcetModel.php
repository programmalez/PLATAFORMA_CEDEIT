<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcetModel extends Model
{
    protected $table='curscetfo';
    protected $fillable = [
                   'curso',
                   'licencia',
                   'perfil',
                   'cuatri',
                   'imagen',
                   'documento',
                   'titulo',
                   'modalidad',
                   'texto',
                   ];
}
