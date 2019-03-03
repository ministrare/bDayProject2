<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message',
    ];

    /**
     * Get the guest that owns the message.
     */
    public function guest()
    {
        return $this->belongsTo('App\Guest');
    }
}
