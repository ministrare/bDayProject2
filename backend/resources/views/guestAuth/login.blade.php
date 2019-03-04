@extends('layouts.app')

@section('content')
    <div class="main-body">
        <div class="invite-text">
            <span class="anchor-box">
                <img src="./images/Path 34.svg">
            </span>
            <span class="text-wishes">
                <h2 class="light-big text-white line-he">Before we sail!</h2>
                <h2 class="big-italic text-white line-he">Signup with the captain!</h2>
            </span>
            <span class="anchor-box">
                <img class="r-right" src="./images/Path 34.svg">
            </span>
        </div>
        <form method="POST" action="{{ route('guest.login') }}">
            @csrf
            <div class="sing-content">
                <input type="text" name="email" title="username" placeholder="EMAIL" id="userName" >
                <input type="text" name="firstName" title="firstname" placeholder="FIRSTNAME" id="firstName">
                <input type="text" name="lastName" title="lastname" placeholder="LASTNAME" id="lastName">
            </div>
            <div class="btn-div login">
                <a href="{{ route('home') }}" class="button login-btn dark" type="button">Home</a>
                <button class="button login-btn dark" type="submit">Continue</button>
            </div>
        </form>
    </div>
@endsection