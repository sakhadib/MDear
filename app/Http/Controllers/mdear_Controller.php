<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Popper;
use App\Models\Mdear;

class mdear_Controller extends Controller
{
    public function index()
    {
        if(!session('is_logged_in'))
        {
            return redirect('/login');
        }

        $username = session('username');
        $popper = Popper::where('username', $username)->first();


        return view('create',
        [
            'popper' => $popper
        ]);
    }

    public function store(Request $request)
    {
        // Check if the user is logged in
        if (!session('is_logged_in')) {
            return redirect('/login');
        }

        // Retrieve the username from the session
        $username = session('username');

        // Find the corresponding Popper record
        $popper = Popper::where('username', $username)->first();

        // Check if Popper exists
        if (!$popper) {
            return redirect('/login')->withErrors('User not found.');
        }

        // Create a new Mdear record
        $mdear = new Mdear();
        $mdear->popper_id = $popper->id;
        $mdear->title = $request->input('title');
        $mdear->content = $request->input('content');
        $mdear->isPublic = $request->input('btnradio') === 'public';

        // Save the Mdear record to the database
        $mdear->save();

        // Redirect to the dashboard after saving
        return redirect('/dashboard');
    }
}
