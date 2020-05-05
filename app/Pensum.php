<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pensum extends Model
{
    protected $fillable = [
        'name', 
        'full-access',
    ];

    public function materias(){
        return $this->belongsToMany('App\Materia')->withTimesTamps();
    }
}
