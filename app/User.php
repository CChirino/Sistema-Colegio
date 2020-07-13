<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword;
use App\Traits\UserTrait;


class User extends Authenticatable
{   
    // use hasMedia;
    // use HasMediaTrait;
    use Notifiable, UserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni', 
        'nombre',
        'apellido',
        'direccion',
        'fecha_nacimiento', 
        'email', 
        'password',
        'image', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //Desde aqui
    public function roles(){
        return $this->belongsToMany('App\Role')->withTimesTamps();
    }
    public function materias(){
        return $this->hasMany('App\Materia','user_id')->withTimesTamps();
    }
        /**
     * Send the password reset notification.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
