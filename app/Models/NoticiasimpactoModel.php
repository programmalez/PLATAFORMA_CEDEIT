<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoticiasimpactoModel extends Model
{
    protected $table='noticimpacto';
    protected $fillable = [
                       'nombre',
                       'imagen',
                       'fecha_publicacion',
                       'hora_publicacion',
                       'texto',
                       'autor',
                       'enlace',
                       ];
}
