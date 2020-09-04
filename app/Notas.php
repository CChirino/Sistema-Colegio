<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'IL_I', 
        'IL_G',
        'IL_F',
        'IIL_I',
        'IIL_G',
        'IIL_F',
        'IIIL_I',
        'IIIL_G',
        'IIIL_F',
        'estudiante_id',
        'materias_id',
    ];
    public function materias()
    {
        return $this->belongsTo('App\Materia');
    }
}
