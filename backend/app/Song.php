<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    /**
     * The users that belong to the role.
     */
    public function guest()
    {
        return $this->belongsToMany('App\Guest');
    }

    /**
     * The artist that belong to the song.
     */
    public function artist()
    {
        return $this->hasMany('App\Artist');
    }

    /**
     * The songtitle that belong to the song.
     */
    public function songTitle()
    {
        return $this->hasMany('App\SongTitle');
    }


}
