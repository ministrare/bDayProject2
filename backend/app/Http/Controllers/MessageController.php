<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$user = Auth::user()){
            return redirect()->route('guest.login')->with(['Status', 'Please log in first..']);
        }

        if(!isset($user->message->message)){
            $message = new Message();
            $message->message = $request['message'];
            $user->message()->save($message);
        }else{

            $user->message->message = $request['message'];
            $user->message->save();
        }

        return redirect()->route('guest.playlist')->with('Status', 'Successfully added message to playlist');
    }
}
