<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubirEvaluacione extends Model
{
            /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'archivo_evaluacion',
        'nombre_archivo', 
        'comentario',
        'evaluaciones_id',

    ];
}
