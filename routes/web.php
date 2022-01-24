<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\infaqController;
use App\Http\Controllers\crowdfundingController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\wakafController;
use App\Http\Controllers\userController;

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

Route::get('/logout', [authController::class, 'logout']);

Route::post('/loginUser', [authController::class, 'login']);

Route::get('/infaq', [infaqController::class, 'getInfaq']);

Route::post('/submitInfaq', [infaqController::class, 'infaqAwal']);

Route::get('/admin', [adminController::class, 'getDana']);

Route::get('/infaqAdmin', [infaqController::class, 'getInfaqAdmin']);

Route::get('/konfirmasiInfaq/{id}', [infaqController::class, 'konfirmasiInfaq']);

Route::get('/beasiswaAdmin', function() {
    return view('admin/beasiswa');
});

Route::get('/crowdfundingAdmin', [crowdfundingController::class, 'getTransaksi']);

Route::get('/formTambahBeasiswa', function() {
    return view('admin/formBeasiswa');
});

Route::post('/submitCrowdfunding', [crowdfundingController::class, 'createCrowdfunding']);

Route::get('/daftarCrowdfunding', [crowdfundingController::class, 'viewCrowdfundingAdmin']);

Route::get('/detailCrowdfunding/{id}', [crowdfundingController::class, 'getDetailCrowdfundingAdmin']);

Route::get('/tutupCrowdfunding/{id}', [crowdfundingController::class, 'tutupCrowdfunding']);

// Route::get('/detailCrowdfunding/{id}', function() {
//     return view('admin/detail');
// });

Route::get('/crowdfunding', [crowdfundingController::class, 'getAllCrowdfunding']);

Route::get('/allCrowdfunding', [crowdfundingController::class, 'getCrowdfunding']);

Route::get('/detailCrowdfundingUser/{id}', [crowdfundingController::class, 'getDetailCrowdfunding']);

Route::get('/konfirmasiCrowdfunding/{idC}/{idU}', [crowdfundingController::class, 'konfirmasi']);

Route::post("/donasi", [crowdfundingController::class, 'donasi']);

Route::get('/waqaf', function() {
    return view('waqaf/waqaf');
});

Route::post('/submitWakaf', [wakafController::class, 'wakaf']);

Route::get('/wakafAdmin', [wakafController::class, 'getAllWakaf']);

Route::get('/konfirmasiWakaf/{id}', [wakafController::class, 'konfirmasi']);

Route::get('/rekap', [adminController::class, 'rekap']);

Route::get('/umumkan/{id}', [adminController::class, 'umumkan']);

Route::get('/daftarAdmin', function(){
    return view('admin/daftarAdmin');
});

Route::post('/registAdmin', [adminController::class, 'daftar']);

Route::get('/profile', [userController::class, 'getProfile']);
