<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ContactsController;
use App\Http\Controllers\User\ContentPageController;
use App\Http\Controllers\User\MailController;
use App\Http\Controllers\User\NewsController;
use App\Http\Controllers\User\SolutionController;
use App\Http\Controllers\User\SupportController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('user.index');
//})->name('dashboard');
Route::get('/',[Controller::class,'index'])->name('dashboard');
//Header Pages
Route::get('/about',[ContentPageController::class,'indexAbout'])->name('about-page');
Route::get('/solutions',[SolutionController::class,'index'])->name('solutions-page');
Route::get('/solution-item/{item_id}',[SolutionController::class,'solutionItem'])->name('solutionItem');

//news
Route::get('/news',[NewsController::class,'index'])->name('news-page');
Route::get('/national-legislation',[NewsController::class,'nationalLegislationListPage'])->name('national.legislation.list');
Route::get('/news-content/{item_id}',[NewsController::class,'indexItem'])->name('news-content-page');
//MobileApp
Route::get('/mobileApp',[ContentPageController::class,'indexMobileApp'])->name('mobile-app-page');
//Contacts
Route::get('/contacts',[ContactsController::class,'index'])->name('contacts-page');
//Support
Route::get('/support',[SupportController::class,'index'])->name('support-page');
//Change Site Language
Route::get('/lang/{locale}',[LocalizationController::class, 'setLang'])->name('changeLang');

//Mail
Route::post('/mail',[MailController::class,'send'])->name('mail');
