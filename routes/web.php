<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\auth;

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
    return redirect('book');
});

/* user required */
Route::middleware(['auth'])->group(function () {
    Route::get('/book/create', [BookController::class, 'create']);
    Route::post('/book', [BookController::class, 'store']);
});

/* no user required */
Route::get('/book', [BookController::class, 'index']);
Route::get('/book/{id}', [BookController::class, 'show']);
Route::get('/forbidden', [BookController::class, 'reject']);

/* admin required */
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::delete('/book/{id}', [BookController::class, 'destroy']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');