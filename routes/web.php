<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\Sessions;
use  App\Http\Controllers\PersonalController;

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

Route::get('/personals', function () {
    return view('personal.create');
});

Route::post('personals',[PersonalController::class,'create']);
Route::resource('personals', PersonalController::class);


Route::get('/register',[Register::class,'create'])
-> name('register.index');

Route::post('/register',[Register::class,'store'])
-> name('register.store');

Route::get('/login',[Sessions::class,'create'])
-> name('login.index');

Route::post('/login',[Sessions::class,'store'])
-> name('login.store');

Route::get('/logout',[Sessions::class,'destroy'])
-> name('login.destroy');


