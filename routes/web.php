<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::post('user/create', [UserController::class, 'create']);
Route::get('user/{id}/edit', [UserController::class, 'edit']);
Route::resource('users', UserController::class);
// Route::get('user/{id}', [UserController::class, 'show']);
// Route::post('user', [UserController::class, 'store']);
// Route::put('user/{id}', [UserController::class, 'update']);
// Route::delete('user/{id}', [UserController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');