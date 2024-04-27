<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoticiascetfocModel extends Model
{
    protected $table='noticetfoc';
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
