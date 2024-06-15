<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\popper;

class signup_Controller extends Controller
{
    public function index()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'uname' => 'required',
            'email' => 'required|email',
            'pass' => 'required',
            'confirm_pass' => 'required',
        ]);

        if($request->pass != $request->confirm_pass)
        {
            return redirect('/signup')->with('error', 'Password does not match');
        }

        $prev_popper = popper::where('username', $request->uname)->first();
        if($prev_popper)
        {
            return redirect('/signup')->with('error', 'Username already exists');
        }

        $random_number = rand(1, 10);

        $popper = new popper;
        $popper->name = $request->fullname;
        $popper->username = $request->uname;
        $popper->email = $request->email;
        $popper->password = md5($request->pass);
        $popper->image = 'avatar'.$random_number.'.png';
        $popper->save();

        return redirect('/login')->with('success', 'Account created successfully');
    }


}
