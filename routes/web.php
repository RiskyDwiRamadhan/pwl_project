<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DVDController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\KembaliController;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

    Route::get('/', [HomeController::class, 'home'])->name('home');

    Route::middleware(['admin'])->group(function () {
        Route::resource('dvd', DVDController::class); 
        // Route::get('/', [HomeController::class, 'index'])->name('home');       
    });
 
    Route::middleware(['kasir'])->group(function () {
        Route::get('/dvds', [DVDController::class, 'dvd'])->name('dvd.home');
        Route::get('/pesan/{id}', [OrderController::class, 'pesan'])->name('dvd.pesan');
        Route::get('/save', [OrderController::class, 'save'])->name('order.save');
        
        Route::resource('order', OrderController::class);
        Route::resource('kembali', KembaliController::class);
    });
 
    Route::get('/logout', function() {
        Auth::logout();
        redirect('/');
    });
 
});