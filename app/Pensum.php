<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pensum extends Model
{
    public function materias(){
        return $this->hasMany('App\Pensum','pensum_id')->withTimesTamps();
    }
}
