<?php

namespace App\Http\Controllers;

use App\Export;
use Illuminate\Support\Facades\DB;

class ExportController extends Controller
{
    public function exportMessages()
    {
         $messages = DB::table('users')
         ->leftJoin('messages', 'users.id', '=', 'messages.user_id')
         ->select('users.name','messages.message')
         ->get();

        $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne(array("Name", "Message"));

        foreach ($messages as $message) {
            $csv->insertOne((array) $message);
        }

        $csv->output('messages.csv');
        dd();
        return redirect()->route('admin')->with('Status', 'Success');
    }

    public function exportSongs()
    {
        $songs = DB::table('users')
            ->leftJoin('song_user', 'users.id', '=', 'song_user.user_id')
            ->leftJoin('songs', 'songs.id', '=', 'song_user.song_id')
            ->select('users.name','songs.artist', 'songs.song_title')
            ->get();

        $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne(array("Name", "artist", "song title"));

        foreach ($songs as $song) {
            $csv->insertOne((array) $song);
        }

        $csv->output('playlist.csv');
        dd();
        return redirect()->route('admin')->with('Status', 'Success');
    }
}
