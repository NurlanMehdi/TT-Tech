<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ContactsController;
use App\Http\Controllers\User\ContentPageController;
use App\Http\Controllers\User\NewsController;
use App\Http\Controllers\User\SolutionController;
use Illuminate\Support\Facades\Route;

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
    return view('user.index');
})->name('dashboard');
//Header Pages
Route::get('/about',[ContentPageController::class,'indexAbout'])->name('about-page');
Route::get('/solutions',[SolutionController::class,'index'])->name('solutions-page');
Route::get('/news',[NewsController::class,'index'])->name('news-page');
Route::get('/mobileApp',[ContentPageController::class,'indexMobileApp'])->name('mobile-app-page');
Route::get('/contacts',[ContactsController::class,'index'])->name('contacts-page');
//Change Site Language

Route::get('/lang/{locale}',[LocalizationController::class, 'index'])->name('changeLang');
