<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use SoftDeletes; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'nombre_materia', 
         'descripcion_materia',
         'periodo_id',
         'pensum_id',
         'role_user_id',
        ];
    // protected $guarded = [];

    public function pensums()
    {
        return $this->belongsToMany('App\Pensum');
    }
    public function periodos()
    {
        return $this->belongsTo('App\Periodo');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function roles()
    {
        return $this->belongsTo('App\Role');
    }
    public function horarios(){
        return $this->hasMany('App\Horario','horario_id')->withTimesTamps();
    }
    public function notas(){
        return $this->hasMany('App\Notas','notas_id')->withTimesTamps();
    }
    public function inscripcions(){
        return $this->belongsToMany('App\Inscripcion')->withTimesTamps();
    }

}
