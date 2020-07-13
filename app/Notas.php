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
        'IL-I', 
        'IL-G',
        'IL-F',
        'IIL-I',
        'IIL-G',
        'IIL-F',
        'IIIL-I',
        'IIIL-G',
        'IIIL-F'
    ];
    public function materias()
    {
        return $this->belongsTo('App\Materia');
    }
}
