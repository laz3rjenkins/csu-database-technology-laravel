<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckAuth;
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
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/logout', [LoginController::class, 'Logout'])->name('logout');

Route::group(['middleware'=>['check_auth']], function(){
    Route::get('/news', [HomeController::class, 'index'])->name('main_page');
    Route::get('/news/add', [HomeController::class, 'addNews'])->name('add_news')->middleware('check_admin');
    Route::post('/add_news_item', [HomeController::class, 'addNewsItem'])->name('add_news_item');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/edit_profile', [ProfileController::class, 'editProfile'])->name('edit_profile');
    Route::post('/set_admin', [ProfileController::class, 'setAdmin'])->name('setadmin');
    Route::post('/disable_admin', [ProfileController::class, 'disableAdmin'])->name('disadmin');
    //Route::any('/', [HomeController::class, 'index']);
});

Route::post('/fake_users', [LoginController::class, 'FakeUsers']);


Route::post('/authorize', [LoginController::class, 'authorizeHandler'])->name('auth');
Route::post('/reg', [LoginController::class, 'registerHandler'])->name('reg');
