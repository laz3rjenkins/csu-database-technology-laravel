<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\LoginController;



Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/logout', [LoginController::class, 'Logout'])->name('logout');

Route::group(['middleware'=>['check_auth']], function(){
    Route::get('/news', [HomeController::class, 'index'])->name('main_page');
    Route::get('/news/add', [HomeController::class, 'addNews'])->name('add_news')->middleware('check_admin');
    Route::post('/add_news_item', [HomeController::class, 'addNewsItem'])->name('add_news_item');
    Route::post('/get_article/{article_id}', [HomeController::class, 'getArticleJson'])->name('get_article');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/edit_profile', [ProfileController::class, 'editProfile'])->name('edit_profile');
    Route::post('/set_admin', [ProfileController::class, 'setAdmin'])->name('setadmin');
    Route::post('/disable_admin', [ProfileController::class, 'disableAdmin'])->name('disadmin');

    //todo: защитить мидлевейром работодателя
    Route::get('/vacancies/add', [VacancyController::class, 'addVacancyView'])->name('add_vacancy_view');
});

//Route::post('/fake_users', [LoginController::class, 'FakeUsers']);


Route::post('/authorize', [LoginController::class, 'authorizeHandler'])->name('auth');
Route::post('/reg', [LoginController::class, 'registerHandler'])->name('reg');
