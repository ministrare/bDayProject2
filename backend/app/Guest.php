<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email',
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
