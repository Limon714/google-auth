<?php

use App\Http\Controllers\GoogleLogin;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return auth()->user();
});

Route::get('/login', function () {
    return view('login');
});



Route::get('/login/google',[GoogleLogin::class,'redirect'])->name('login/google');
Route::get('/login/google/callback',[GoogleLogin::class,'callback']);

