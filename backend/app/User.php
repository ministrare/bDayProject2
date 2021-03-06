<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'firstname', 'lastname', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'isAdmin', 'password', 'remember_token',
    ];


    /**
     * Get the message record associated with the guest.
     */
    public function message()
    {
        return $this->hasOne('App\Message');
    }

    /**
     * The roles that belong to the user.
     */
    public function songs()
    {
        return $this->belongsToMany('App\Song');
    }
}
