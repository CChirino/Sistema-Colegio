<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Horarios extends Model
{
    use SoftDeletes; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dia', 
        'horario',
        'aula',
        'cupos',
        'seccion',
        'horario_id'

    ];

    public function materias()
    {
        return $this->belongsTo('App\Materia');
    }
}
