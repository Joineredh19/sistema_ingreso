<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\Sessions;

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

Route::get('/inicio', function () {
    return view('indexx');
});


Route::get('/register',[Register::class,'create'])
-> name('register.index');

Route::post('/register',[Register::class,'store'])
-> name('register.store');

Route::get('/login',[Sessions::class,'create'])
-> name('login.index');

Route::post('/login',[Sessions::class,'store'])
-> name('login.store');

Route::get('/logout',[Sessions::class,'destroy'])
-> name('login.destro');
