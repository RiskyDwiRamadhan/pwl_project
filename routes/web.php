<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DVDController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\KembaliController;
use App\Http\Controllers\UserkuController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/dvds', [DVDController::class, 'dvd'])->name('dvd.home');
// Route::get('/pesan/{id}', [OrderController::class, 'pesan'])->name('dvd.pesan');
// Route::get('/save', [OrderController::class, 'save'])->name('order.save');

// Route::resource('order', OrderController::class);
// Route::resource('dvd', DVDController::class);
// Route::resource('sewa', PenyewaanController::class);
Route::resource('userku', UserkuController::class);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/cetak_pdf', [HomeController::class, 'cetak_pdf'])->name('home.cetak');

    Route::middleware(['admin'])->group(function () {
        Route::resource('dvd', DVDController::class);
        // Route::get('/', [HomeController::class, 'index'])->name('home');       
    });

    Route::middleware(['kasir'])->group(function () {
        Route::get('/home', [DVDController::class, 'dvd'])->name('dvd.home');
        Route::get('/pesan/{id}', [OrderController::class, 'pesan'])->name('dvd.pesan');
        Route::get('/save', [OrderController::class, 'save'])->name('order.save');
        Route::get('/kembali/{id}', [KembaliController::class, 'kembali'])->name('kembali.kembali');

        Route::resource('order', OrderController::class);
        Route::resource('kembali', KembaliController::class);
    });

    Route::get('/logout', function () {
        Auth::logout();
        redirect('/');
    });
});
