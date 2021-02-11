<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpinionEvaluacione extends Model
{
    use SoftDeletes; 

    protected $guarded = [];
    public function subir_evaluaciones(){
        return $this->belongsTo(SubirEvaluacione::class);
    }
}
