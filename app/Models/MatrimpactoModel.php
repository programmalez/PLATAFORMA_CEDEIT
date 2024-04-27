<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatrimpactoModel extends Model
{
    protected $table='Matrimpacto';
    protected $fillable = [
        'nombres1',
        'nombres2',
        'apellido1',
        'apellido2',
        'identificacion',
        'documento',
        'lugarexpe',
        'fechaexpe',
        'lugarnaci',
        'fechanaci',
        'edad',
        'direccion',
        'municipio',
        'departamento',
        'celular1',
        'celular2',
        'correo',
        'expulsor',
        'describa',
        'describa2',
        'describa3',
        'soltero',
        'casado',
        'otro',
        'desplazamiento',
        'desvinculados',
        'raizales',
        'afrocolombianos',
        'indigenas',
        'rom',
        'fisicaSi',
        'cognitivaSi',
        'excepcionesSi',
        'programa'
    ];  
}
