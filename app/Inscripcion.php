<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use SoftDeletes; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'periodo_id',
        'pensum_id',
        'role_user_id',
    ];


    public function materias()
    {
        return $this->belongsToMany('App\Materia')->withTimesTamps();
    }
    public function pensums()
    {
        return $this->belongsTo('App\Pensum');
    }
    public function periodos()
    {
        return $this->belongsTo('App\Periodo');
    }

    public function notas()
    {
        return $this->belongsToMany('App\Notas')->withTimesTamps();
    }



}
