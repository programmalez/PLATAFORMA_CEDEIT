<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcedModel extends Model
{
    protected $table='procedeit';
    protected $fillable = [
                   'curso',
                   'titulo',
                   'imagen',
                   ];
}
