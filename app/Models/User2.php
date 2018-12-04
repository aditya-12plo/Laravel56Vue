<?php

namespace App\Models;

/*
use Illuminate\Database\Eloquent\Model;
*/
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User2 extends Authenticatable
{
   
    use Notifiable;

    // The authentication guard for user2
    protected $guard = 'user2';


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




    public function verifyUser2()
    {
        return $this->hasOne('App\Models\VerifyUser2');
    }
}
