<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ContactsController;
use App\Http\Controllers\User\ContentPageController;
use App\Http\Controllers\User\NewsController;
use App\Http\Controllers\User\SolutionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.index');
})->name('dashboard');
//Header Pages
Route::get('/about',[ContentPageController::class,'indexAbout'])->name('about-page');
Route::get('/solutions',[SolutionController::class,'index'])->name('solutions-page');
Route::get('/news',[NewsController::class,'index'])->name('news-page');
Route::get('/mobileApp',[ContentPageController::class,'indexMobileApp'])->name('mobile-app-page');
Route::get('/contacts',[ContactsController::class,'index'])->name('contacts-page');
//Change Site Language

Route::get('/lang/{locale}',[LocalizationController::class, 'setLang'])->name('changeLang');
