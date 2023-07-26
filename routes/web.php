<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use App\Http\Controllers\Guest\MovieController as GuestMovieCotroller;
use App\Http\Controllers\Guest\PageController as PageController;

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

Route::get('/',[PageController::class, 'index'])->name('guest.home');
Route::get('/guest/index',[GuestMovieCotroller::class, 'index'])->name('guest.movie.index');