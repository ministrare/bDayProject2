@extends('layouts.app')

@section('content')
    <div class="main-body">
        <div class="invite-text">
            <span class="anchor-box">
                <img src="./images/Path 34.svg">
            </span>
            <span class="text-wishes">
                <h2 class="light-big text-white line-he">Admin Page</h2>
                <h2 class="big-italic text-white line-he">Export your playlist & messages</h2>
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
            Admin Page
        </div>
        <div class="dash">
            <!-- <img src="./images/Line 4.svg">
             -->
        </div>
        <div class="btn-div bottom text-align-right">
            <a class="button done dark" type="button" href="{{ route('logout') }}">
                {{ __('Logout') }}
            </a>
        </div>
    </div>
@endsection
