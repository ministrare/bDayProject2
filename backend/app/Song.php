<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'artist', 'song_title', 'url',
    ];

    /**
     * The users that belong to the role.
     */
    public function user()
    {
        return $this->belongsToMany('App\User');
    }

}