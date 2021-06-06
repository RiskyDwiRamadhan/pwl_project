<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DVDController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;

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
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dvds', [DVDController::class, 'dvd'])->name('dvd.home');
Route::get('/pesan/{id}', [OrderController::class, 'pesan'])->name('dvd.pesan');

Route::resource('order', OrderController::class);
Route::resource('dvd', DVDController::class);
Route::resource('sewa', PenyewaanController::class);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
