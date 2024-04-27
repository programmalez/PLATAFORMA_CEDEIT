<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProimpactModel extends Model
{
    protected $table='cursimpa';
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
