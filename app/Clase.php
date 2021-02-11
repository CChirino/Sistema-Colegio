<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Clase extends Model
{
    use SoftDeletes; 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_clase', 
        'link_clase',
        'materia_id',
    ];
    public function materias()
    {
        return $this->hasMany('App\Materia');
    }
}
