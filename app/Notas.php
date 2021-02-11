<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    use SoftDeletes; 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public function materias()
    {
        return $this->belongsTo('App\Materia');
    }
}
