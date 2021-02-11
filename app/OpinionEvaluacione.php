<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OpinionEvaluacione extends Model
{
    use SoftDeletes; 

    protected $guarded = [];
    public function subir_evaluaciones(){
        return $this->belongsTo(SubirEvaluacione::class);
    }
}
