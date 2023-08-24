<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('NewPages.Opening');});
Route::get('/register', function () {return view('NewPages.Registrasi');});
Route::get('/otp', function () {return view('NewPages.Otp');});
Route::get('/welcome', function () {return view('NewPages.SelamatDatang');});
Route::get('/kuisioner', function () {return view('NewPages.IsiKuisioner');});
Route::get('/hasil', function () {return view('NewPages.Hasil');});
Route::get('/beranda', function () {return view('NewPages.Beranda');});
Route::get('/marketer', function () {return view('NewPages.Marketer');});
Route::get('/marketerdetail', function () {return view('NewPages.MarketerDetail');});
Route::get('/profile', function () {return view('NewPages.Profile');});
Route::get('/lupapassword', function () {return view('NewPages.LupaPassword');});


// Route::get('/login', function () {return view('Pages.Login');});
// Route::get('/register2', function () {return view('Pages.Register2');});

// Route::get('/dashboard', function () {return view('Pages.TemplateSideBar');});

// Route::get('/content', function () {return view('Pages.contentSideBar');});
