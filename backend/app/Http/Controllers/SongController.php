<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function index()
    {
        if(!$user = Auth::user()){
            return redirect()->route('guest.login')->with(['Status', 'Please log in first..']);
        }

        $songs = $user->songs;
        $message = $user->message->message;

        return view('guests.playlist', compact("user", "songs", "message"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'artist'=>'required',
            'songTitle'=> 'required',
            //'url' => 'required'
        ]);

        if(!$user = Auth::user()){
            return redirect()->route('guest.login')->with(['Status', 'Please log in first..']);
        }

        if(count($user->songs) >= 3){
            return redirect()->route('guest.playlist')->with(['Status', 'Cannot add more then 3 songs']);
        }

        $song = new Song();
        $song->artist = $request->input('artist');
        $song->song_title = $request->input('songTitle');
        $song->url = $request->input('songTitle');

        $song->save();

        $user->songs()->attach($song);

        $user->save();

        return redirect()->route('guest.playlist')->with('Status', 'Successfully added song to user');
    }

    public function edit($id)
    {
        if(!$user = Auth::user()){
            return redirect()->route('guest.login')->with(['Status', 'Please log in first..']);
        }

        $song = Song::all()->where('id', $id)->first();

        return view('guests.playlist', compact("user", "song"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'artist'=>'required',
            'songTitle'=> 'required',
            //'url' => 'required'
        ]);

        if(!$user = Auth::user()){
            return redirect()->route('guest.login')->with(['Status', 'Please log in first..']);
        }

        $song = Song::where('id', $id)->first();
        $song->artist = $request['artist'];
        $song->song_title = $request['songTitle'];
        $song->url = $request['songTitle'];

        $song->update();

        return redirect()->route('guest.playlist')->with('Status', 'Successfully updated song details');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$user = Auth::user()){
            return redirect()->route('guest.login')->with(['Status', 'Please log in first..']);
        }

        $song = Song::all()->where('id', '=', $id)->first();

        $user->songs()->detach($song);
        $song->delete();

        return redirect()->route('guest.playlist')->with('Status', 'Success');
    }
}
