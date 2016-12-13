<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','email', 'image', 'password','auth_token','auth_token'
    ];

    protected $appends = ['thumb','name'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','auth_token'
    ];

    function setPasswordAttribute($value)
    {
        $this->attributes['password']=bcrypt($value);
    }

    function posts(){
        return $this->hasMany(Post::class,'user_id');
    }

    function getThumbAttribute(){

        return route('user.thumb',[$this->image]);
    }
    function getNameAttribute(){

        return $this->first_name." ".$this->last_name ;
    }

}
