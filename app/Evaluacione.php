<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacione extends Model
{
    use SoftDeletes; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_evaluacion', 
        'fecha_inicio',
        'fecha_fin',
        'archivo_evaluacion',
        'materia_id',
        // 'estudiante_id',
        // 'profesores_id', 

    ];
}
