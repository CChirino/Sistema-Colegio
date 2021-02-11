<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pensum extends Model
{
    use SoftDeletes; 


    public function materias(){
        return $this->hasMany('App\Pensum','pensum_id')->withTimesTamps();
    }
    public function inscripcions(){
        return $this->hasMany('App\Pensum','pensum_id')->withTimesTamps();
    }
}
