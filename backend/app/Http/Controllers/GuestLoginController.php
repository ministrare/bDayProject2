<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Input;

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

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'firstName', 'lastName');
        $user = User::where('email', '=', Input::get('email'))->first();

        if(!isset($user)){
            $validatedData = $request->validate([
                'email' => 'required|unique:users|max:255',
                'firstName' => 'required',
                'lastName' => 'required',
            ]);

            User::create([
                'firstname' => $credentials['firstName'],
                'lastname' => $credentials['lastName'],
                'name' => $credentials['firstName']. ' ' . $credentials['lastName'],
                'email' => $credentials['email'],
                'password' => Hash::make($data['password']),
            ]);
        }



        return redirect()->route('guest.playlist');
    }

    public function logout()
    {

    }
}
