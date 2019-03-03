<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'artist',
    ];

    /**
     * Get the post that owns the comment.
     */
    public function song()
    {
        return $this->belongsTo('App\Song');
    }
}
