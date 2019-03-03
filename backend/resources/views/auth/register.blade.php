@extends('layouts.app')

@section('content')
    <div class="main-body">
        <div class="invite-text">
            <span class="anchor-box">
                <img src="/images/Path 34.svg">
            </span>
            <span class="text-wishes">
                <h2 class="light-big text-white line-he">Before we sail!</h2>
                <h2 class="big-italic text-white line-he">Signup as the captain!</h2>
            </span>
            <span class="anchor-box">
                <img class="r-right" src="/images/Path 34.svg">
            </span>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="sing-content">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="NAME">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="EMAIL">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="PASSWORD">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="PASSWORD CONFIRMATION">

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="btn-div login">
                <a href="{{ route('home') }}" class="button login-btn dark" type="button">Home</a>
                <button type="submit" class="button login-btn dark">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
@endsection
