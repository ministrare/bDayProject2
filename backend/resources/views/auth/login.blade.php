@extends('layouts.app')

@section('content')

    <div class="main-body">
        <div class="invite-text">
            <span class="anchor-box">
                <img src="/images/Path 34.svg">
            </span>
            <span class="text-wishes">
                <h2 class="light-big text-white line-he">Voordat we feesten</h2>
                <h2 class="big-italic text-white line-he">Schrijf u in als matroos!</h2>
            </span>
            <span class="anchor-box">
                <img class="r-right" src="/images/Path 34.svg">
            </span>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="sing-content">
                <input id="userName" type="email" class="form-control{{ $errors->has('email') ? '' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="EMAIL">
                <input id="pass" type="password" class="form-control{{ $errors->has('password') ? '' : '' }}" name="password" required placeholder="PASSWORD">
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

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

                <button type="submit" class="button login-btn dark">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
@endsection
