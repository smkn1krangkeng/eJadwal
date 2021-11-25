<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Livewire\Dashboards;
use App\Http\Livewire\Homes;
use App\Http\Livewire\Logins;
use App\Http\Livewire\Logouts;
use App\Http\Livewire\Users;
use App\Http\Livewire\Counters;

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
//Route::get('/', function () {return view('pages.home');});
Route::get('/', Homes::class);
Route::get('/home', Homes::class)->name('home');
Route::get('/login', Logins::class)->middleware('guest')->name('login');
//Route::post('/login', [LoginController::class, 'postLogin']);
Route::get('/logout', Logouts::class)->name('logout');
//backend page
Route::group(['middleware' => ['auth']], function () {
    // role untuk yang auth
    Route::get('/dashboard',Dashboards::class)->name('dashboard');
    
    // role untuk admin
    Route::group(['middleware' => ['role:Admin']], function () {
        Route::get('/pengguna', [PenggunaController::class, 'index'] )->name('pengguna.index');
        Route::get('/pengguna/add', [PenggunaController::class, 'create'] )->name('pengguna.create');
        Route::post('/pengguna/store', [PenggunaController::class, 'store'] )->name('pengguna.store');
        Route::get('/pengguna/export', [PenggunaController::class, 'user_export'] )->name('pengguna.export');
        Route::post('/pengguna/import', [PenggunaController::class, 'user_import'] )->name('pengguna.import');
        Route::get('/pengguna/edit/{id}', [PenggunaController::class, 'edit'])->name('pengguna.edit');
        Route::put('/pengguna/update/{id}', [PenggunaController::class, 'update'])->name('pengguna.update');
        Route::delete('/pengguna/del/{id}', [PenggunaController::class, 'destroy'])->name('pengguna.del');
        Route::delete('/penggunas/delSel', [PenggunaController::class, 'deleteSel'])->name('pengguna.delsel');
        Route::post('/pengguna/roleSel', [PenggunaController::class, 'roleSel'] )->name('pengguna.roleSel');
        //user livewire
        Route::get('/user', Users::class);
        Route::get('/counters', Counters::class)->name('counters');
    });
    

});


