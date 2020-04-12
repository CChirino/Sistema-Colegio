<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
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
}
