<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestLoginController extends Controller
{
    /**
     * Show the application login for guests.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showLoginForm()
    {
        return view('guestAuth.login');
    }

    public function login()
    {
        return redirect()->route('guest.playlist');
    }

    public function logout()
    {

    }
}
