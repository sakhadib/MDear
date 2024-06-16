<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\popper;

class login_Controller extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'uname' => 'required',
            'pass' => 'required'
        ]);

        $user = popper::where('username', $request->uname)->first();

        if(!$user)
        {
            return redirect('/login')->with('error', 'User does not exist');
        }

        if ($user->password != md5($request->pass)) {
            return redirect('/login')->with('error', 'Incorrect password');
        }

        session(['username' => $user->username, 'is_logged_in' => true, 'image' => $user->image]);

        return redirect('/dashboard');
    }


    public function logout()
    {
        session()->forget('username');
        session()->forget('is_logged_in');

        return redirect('/login');
    }
}
