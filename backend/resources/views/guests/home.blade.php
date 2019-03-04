@extends('layouts.app')

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

        <div class="invite-content">
            <div class="picture-main"><img src="./images/dirk-image.jpg"></div>
            <div class="text-content-main">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the Lorem Ipsum has been the industry's standard dummy
                    text ever since the Lorem Ipsum has been the industry's
                    standard dummy text ever since the Lorem Ipsum has been the industry's standard dummy text ever
                    since the
                </p>
            </div>
            <div class="side-image-main"><img src="./images/dirk-image2.jpg"></div>
        </div>

        <div class="dash">
            <!-- <img src="./images/Line 4.svg">
             -->
        </div>
        <span class="blast-bd">
            <h2 class="big-italic text-white line-he">My Birthday with a blast!</h2>
        </span>
        <div class="playlist-box">
            <div class="playlist-text">
                <span>Have the perfect song for the occasion ?</span>
                <br>
                <span>Don't forget to create a playlist for the party</span>
            </div>
            <div class="fakeimg">
                <span>
                    <a href="{{ route('guest.login') }}">Create a playlist of your favorite songs</a>
                    <img src="./images/Path 31.svg" width="20" height="20"> </a>
                </span>
            </div>
        </div>
        <div class="dash">
            <!-- <img src="./images/Line 4.svg"> -->
        </div>

        <div class="bd-location-box">
            <span class="just-content">
                <h2 class="big-italic text-white line-he lg-text">Drop your anchors!</h2>
                <h2 class="big-italic text-white line-he lg-text">And follow the map</h2>
            </span>

            <div class="location-content">
                <div class="location-tent">
                    <span class="f-box f-box-label">Location</span>
                    <span class="f-box f-box-text">Corbie Hotel - Banquet Hall<br> Markt 14, Tessenderlo,</span><br>
                    <span class="f-box f-box-label">Time</span>
                    <span class="f-box f-box-text">From 18:00 - 22:00</span><br>
                    <span class="f-box f-box-label">Attire    </span>
                    <span class="f-box f-box-text">Semi-Casual</span>
                </div>
                <div class="g-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10086.871026408058!2d4.992665815508444!3d50.799339073187795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c16cc6612a0117%3A0x2384fb18bd3fba74!2sTotal!5e0!3m2!1sen!2sbe!4v1551104146248"
                            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
@endsection