<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubirEvaluacione extends Model
{
    use SoftDeletes; 

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
        'user_id',

    ];
}
