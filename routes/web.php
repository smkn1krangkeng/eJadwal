<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
//frontend page
Route::get('/', function () {return view('pages.home');});
Route::get('/home', function () {return view('pages.home');})->name('home');
Route::get('/login', [LoginController::class, 'getLogin'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'postLogin']);
Route::post('/logout', [LoginController::class, 'logout']);
//backend page
Route::group(['middleware' => ['auth']], function () {
    // role untuk yang auth
    Route::get('/dashboard', function () {return view('pages.admin');})->name('dashboard');
    
    // role untuk admin
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/pengguna', function () {return view('pages.pengguna');})->name('pengguna');
    });
    

});


