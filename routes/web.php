<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\LoginController;
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
// TODO: навесить мидлваер, который проверяет автризацию, начать верстать главную страницу
Route::get('/', [HomeController::class, 'index'])->name('main_page');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');


Route::post('/authorize', [LoginController::class, 'authorizeHandler'])->name('auth');
Route::post('/reg', [LoginController::class, 'registerHandler'])->name('reg');
