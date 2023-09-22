<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login', function () {
    return view('login');
})->middleware('validateIsLogged');


Route::get('/', function () {
    return view('welcome');
})->middleware('validateToken');

Route::post('/auth/login', [\App\Http\Controllers\LoginController::class, 'login']);

Route::get('/logout', [\App\Http\Controllers\LogoutController::class, 'logout']);




