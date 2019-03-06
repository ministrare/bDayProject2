@extends('layouts.app')

@section('content')
    <div class="main-body">
        <div class="invite-text">
                <span class="anchor-box">
                    <img src="/images/Path 34.svg">
                </span>
            <span class="text-wishes">
                   <h2 class="light-big text-white line-he">50 jaar, dat moet gevierd worden!</h2>
                <h2 class="big-italic text-white line-he">My Birthday with a blast!</h2>
               </span>
            <span class="anchor-box">
                        <img class="r-right" src="/images/Path 34.svg">
                    </span>

        </div>

        <div class="dash">
            <!-- <img src="./images/Line 4.svg">
             -->
        </div>

        <div class="announcement-box big-italic text-white">
            Add your favorite 3 Songs to the playlist below
        </div>
        <div class="dash">
            <!-- <img src="./images/Line 4.svg">
             -->
        </div>
        <form method="POST" action="{{ Request::is('playlist')? route('guest.song.add') : route('guest.song.update', $song->id) }}">
            @csrf
            {{ Request::is('playlist')? '' : @method_field('PUT') }}
            <div class="inputBox-mainContent">
                <div class="field-content">
                    <span class="small-heading ">Arrgh! Song!</span>
                    <label for="songName">Artist</label>
                    <input type="text" name="artist" id="artist" class="inp-name" value="{{isset($song->artist) ? $song->artist : old('artist')}}"  placeholder="Just Beiber">
                    <label for="songName">Song title</label>
                    <input type="text" name="songTitle" id="songTitle" class="inp-name" placeholder="Baby" value="{{isset($song->song_title) ? $song->song_title : old('songTitle')}}">
                    <input type="text" name="url" id="songURL" class="inp-name" placeholder="https://youtube.com" hidden value="{{isset($song->url) ? $song->url : old('songURL')}}">
                    <div class="btn-div text-align-right">
                        {{--<button class="button dark">Remove</button>--}}
                        <button class="button add dark" type="submit">{{Request::is('playlist')? "Add" : "Edit" }}</button>
                    </div>
                </div>
                <div class="preview-content"></div>
            </div>
        </form>
        @if(isset($songs))
            <div class="dash">
                <!-- <img src="./images/Line 4.svg">
             -->
            </div>
            <div class="inputBox-mainContent">
                <div class="field-content">
                    <table>
                        <thead>
                            <th>id</th>
                            <th>artist</th>
                            <th>song</th>
                            <th></th>
                        </thead>
                        <tbody>
                        @foreach($songs as $i => $song)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $song['artist'] }}</td>
                                <td>{{ $song['song_title'] }}</td>
                                <td>
                                    <a href="{{ route('guest.song.edit', $song) }}" class="button done dark small" type="button">Edit</a>
                                    <form action="{{route('guest.song.destroy', $song['id'])}}" method="POST" style="display: inline-block;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="button done dark small">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
        <div class="dash">
            <!-- <img src="./images/Line 4.svg">
         -->
        </div>
        <form method="POST" action="{{ route('guest.message.add') }}">
            @csrf
            <div class="inputBox-mainContent">
                <div class="field-content">
                    <span class="small-heading ">Leave a message, Arrgh!</span>
                    <textarea name="message" id="" cols="54" rows="10">{{ isset($message) ? $message : old('message') }}</textarea>
                    <button class="button add dark" type="submit">Submit message</button>
                </div>
            </div>
        </form>
        <div class="dash">
            <!-- <img src="./images/Line 4.svg">
             -->
        </div>

        <div class="btn-div bottom text-align-right">
            <a href="{{ route('guest.done') }}" class="button done dark" type="button">Done</a>
        </div>
    </div>
@endsection
