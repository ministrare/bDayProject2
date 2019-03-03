<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SongTitle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'song_title',
    ];

    /**
     * Get the post that owns the comment.
     */
    public function song()
    {
        return $this->belongsTo('App\Song');
    }
}
