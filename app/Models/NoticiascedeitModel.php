<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoticiascedeitModel extends Model
{
    protected $table='noticedeit';
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
