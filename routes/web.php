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

Route::get('/', function () {return view('Pages.Option');});
Route::get('/login', function () {return view('Pages.Login');});
Route::get('/register', function () {return view('Pages.Register');});
Route::get('/register2', function () {return view('Pages.Register2');});

Route::get('/dashboard', function () {return view('Pages.TemplateSideBar');});

Route::get('/content', function () {return view('Pages.contentSideBar');});
