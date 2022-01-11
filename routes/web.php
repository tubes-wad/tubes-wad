<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('auth/regist');
});

Route::post('/registUser', [authController::class, 'registrasi']);

Route::get('/login', function() {
    return view('auth/login');
});

Route::post('/loginUser', [authController::class, 'login']);

