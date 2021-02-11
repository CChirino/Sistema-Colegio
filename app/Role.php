<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use SoftDeletes; 

    //Desde aqui
    protected $fillable = [
        'name', 
        'full-access',
    ];
    public function users(){
        return $this->belongsToMany('App\User')->withTimesTamps();
    }
    public function permissions(){
        return $this->belongsToMany('App\Permission')->withTimesTamps();
    }
    public function materias(){
        return $this->hasMany('App\Materia','role_id')->withTimesTamps();
    }
}
