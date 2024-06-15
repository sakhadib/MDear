<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\signup_Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/signup', [signup_Controller::class, 'index']);
Route::post('/signup', [signup_Controller::class, 'store']);
