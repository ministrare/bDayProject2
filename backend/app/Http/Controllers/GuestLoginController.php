<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

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

    public function validation($request)
    {
        return $this->validate($request, [
            'email' => 'required|unique:users|max:255',
            'firstName' => 'required',
            'lastName' => 'required',
        ]);
    }

    public function register(Request $request)
    {
        $this->validation($request);
        $credentials = $request->only('email', 'firstName', 'lastName');

        $user = User::create([
            'firstname' => $credentials['firstName'],
            'lastname' => $credentials['lastName'],
            'name' => $credentials['firstName']. ' ' . $credentials['lastName'],
            'email' => $credentials['email'],
            'password' => Hash::make('default'),
        ]);

        return $user;
    }

    public function Authenticate(Request $request)
    {
        $user = User::where('email', '=', $request['email'])->first();

        if(!isset($user)){
            $user = $this->register($request);
        }

        if(Auth::attempt(['email' => $request->email, 'password' => 'default']))
        {
            return $user;
        }

        die ('something went wrong');
    }

    public function login(Request $request)
    {
        $user = $this->Authenticate($request);
        return redirect()->route('guest.playlist', compact($user));
    }
}
