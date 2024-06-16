<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\signup_Controller;
use App\Http\Controllers\login_Controller;
use App\Http\Controllers\dashboard_Controller;
use App\Http\Controllers\mdear_Controller;

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

Route::get('/login', [login_Controller::class, 'index']);
Route::post('/login', [login_Controller::class, 'login']);
Route::get('/logout', [login_Controller::class, 'logout']);

Route::get('/dashboard', [dashboard_Controller::class, 'index']);

Route::get('/create', [mdear_Controller::class, 'index']);
Route::post('/create', [mdear_Controller::class, 'store']);