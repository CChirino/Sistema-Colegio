<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = [
        'nombre_materia', 
        'descripcion_materia',
        'pensum',
    ];

    public function pensums(){
        return $this->belongsToMany('App\Pensum')->withTimesTamps();
    }
}
