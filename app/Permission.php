<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use SoftDeletes; 

    //
    protected $fillable = [
        'name', 
        'slug',
        'description'
    ];
    
    public function roles(){
        return $this->belongsToMany('App\Role')->withTimesTamps();
    }
}
