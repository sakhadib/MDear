<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard_Controller extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
