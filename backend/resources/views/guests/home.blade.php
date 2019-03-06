@extends('layouts.app')

@section('content')

    <div class="main-body">
        <div class="invite-text">
                <span class="anchor-box">
                    <img src="./images/Path 34.svg">
                </span>
            <span class="text-wishes">
                   <h2 class="light-big text-white line-he">50 jaar, dat moet gevierd worden</h2>
                <h2 class="big-italic text-white line-he">Doe mee met mijn meezing- en dansfeest!</h2>
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
                    Op 2 mei 2019 is 1/3de van mijn leven voorbij:-) Dat moet gevierd worden. We gaan er een leuk feestje
                    van maken. Om het voor iedereen even gezellig te maken, nodig ik jullie allemaal uit om jullie Top 3 van 
                    meezing- en/of dansliedje door te sturen.
                </p>
            </div>
            <div class="side-image-main"><img src="./images/dirk-image2.jpg"></div>
        </div>

        <div class="dash">
            <!-- <img src="./images/Line 4.svg">
             -->
        </div>
        <span class="blast-bd">
            <h2 class="big-italic text-white line-he">Zing en swing met mij mee!</h2>
        </span>
        <div class="playlist-box">
            <div class="playlist-text">
                <span>Heb je al het perfecte liedje voor mijn verjaardagsfeest?</span>
                <br>
                <span>Vergeet dan niet om uw playlist aan te maken</span>
            </div>
            <div class="fakeimg">
                <span>
                    <a href="{{ route('guest.login') }}">Maak hier uw playlist aan</a>
                    <img src="./images/Path 31.svg" width="20" height="20"> </a>
                </span>
            </div>
        </div>
        <div class="dash">
            <!-- <img src="./images/Line 4.svg"> -->
        </div>

        <div class="bd-location-box">
            <span class="just-content">
                <h2 class="big-italic text-white line-he lg-text">Ankers los!</h2>
                <h2 class="big-italic text-white line-he lg-text">En gebruik deze kaart!</h2>
            </span>

            <div class="location-content">
                <div class="location-tent">
                    <span class="f-box f-box-label">Locatie</span>
                    <span class="f-box f-box-text">VVW Zutendaal<br> Sellerveldstraat 10, Zutendaal</span><br>Gelieve de ingang via de Genkerweg te nemen en door te rijden tot het einde<br>
                    <span class="f-box f-box-label">Tijdstip</span>
                    <span class="f-box f-box-text">Vanaf 20:00 - ???</span><br>
                </div>
                <div class="g-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10086.871026408058!2d4.992665815508444!3d50.799339073187795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c16cc6612a0117%3A0x2384fb18bd3fba74!2sTotal!5e0!3m2!1sen!2sbe!4v1551104146248"
                            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>
@endsection
