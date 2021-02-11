<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Periodo extends Model
{
    use SoftDeletes; 


    protected $fillable = [
        'nombre_periodo', 
        'fecha_inicio',
        'fecha_fin'
    ];
    public function materias(){
        return $this->hasMany('App\Periodo','periodo_id')->withTimesTamps();
    }
    public function inscripcions(){
        return $this->hasMany('App\Periodo','periodo_id')->withTimesTamps();
    }
}
