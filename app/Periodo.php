<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $fillable = [
        'nombre_periodo', 
        'fecha_inicio',
        'fecha_fin'
    ];
    public function materias(){
        return $this->hasMany('App\Pensum','periodo_id')->withTimesTamps();
    }
}
