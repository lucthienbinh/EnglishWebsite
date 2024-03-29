<?php

namespace App;

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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function comment()
    {
        return $this->hasMany('App\Comment','idUser','id');
    }
    public function diaryenglish()
    {
        return $this->hasMany('App\DiaryEnglish','idUser','id');
    }
    public function userpoint()
    {
        return $this->hasOne('App\UserPoint','idUser','id');
    }
}
