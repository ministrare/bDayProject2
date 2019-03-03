@extends('layouts.guests')

@section('content')
    <div class="main-body">
        <div class="invite-text">
                <span class="anchor-box">
                    <img src="./images/Path 34.svg">
                </span>
            <span class="text-wishes">
                   <h2 class="light-big text-white line-he">Join us as I celebrate</h2>
                <h2 class="big-italic text-white line-he">My Birthday with a blast!</h2>
               </span>
            <span class="anchor-box">
                        <img class="r-right" src="./images/Path 34.svg">
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
        <form>



            <div class="inputBox-mainContent">
                <div class="field-content">
                    <span class="small-heading ">Arrgh! Song!</span>
                    <label for="songName">Song Name</label>
                    <input type="text" id="songName" class="inp-name" onfocus="this.value=''" value="Just Beiber - Baby">
                    <label for="songURL">Song URL</label>
                    <input type="text" id="songURL" class="inp-name" onfocus="this.value=''" value="https://youtube.com">
                    <div class="btn-div">
                        <button class="button dark">Remove</button>
                        <button class="button add dark">Add</button>
                    </div>
                </div>
                <div class="preview-content"></div>



            </div>
            <div class="dash">
                <!-- <img src="./images/Line 4.svg">
             -->
            </div>
            <div class="inputBox-mainContent">
                <div class="field-content">
                    <span class="small-heading ">Arrgh! Song!</span>
                    <label for="songName">Song Name</label>
                    <input type="text" id="songName" class="inp-name" onfocus="this.value=''" value="Just Beiber - Baby">
                    <label for="songURL">Song URL</label>
                    <input type="text" id="songURL" class="inp-name" onfocus="this.value=''" value="https://youtube.com">
                    <div class="btn-div">
                        <button class="button dark">Remove</button>
                        <button class="button add dark">Add</button>
                    </div>
                </div>
                <div class="preview-content"></div>



            </div>
            <div class="dash">
                <!-- <img src="./images/Line 4.svg">
             -->
            </div>
        </form>
        <div class="btn-div bottom text-align-right">
            <a href="{{ route('guest.done') }}" class="button done dark" type="button">Done</a>
        </div>
    </div>
@endsection