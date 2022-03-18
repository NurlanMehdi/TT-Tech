<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

Route::group(['middleware'=>'auth'],function (){
    Route::get('/tt', function () {
        return view('admin.index');
    })->name('admin-panel');
//About Us
    Route::get('/about','App\Http\Controllers\Admin\AboutController@index')->name('about');
    Route::get('/new-about-info/{id}/{key}/{lang?}','App\Http\Controllers\Admin\AboutController@addNewAboutInfo')->name('add-new-about-info');
    Route::post('/save-about-info','App\Http\Controllers\Admin\AboutController@saveAboutInfo')->name('save-about-info');
    Route::get('/delete-about/{id}','App\Http\Controllers\Admin\AboutController@trashAboutInfo')->name('trash-about');
    Route::get('/delete-about-translate/{id}','App\Http\Controllers\Admin\AboutController@trashAboutOnlyTranslate')->name('trash-about-translate');
//Solutions
    Route::get('/solutions','App\Http\Controllers\Admin\SolutionController@index')->name('solutions');
    Route::get('/new-solution-info/{id}/{key}/{lang?}','App\Http\Controllers\Admin\SolutionController@addNewSolution')->name('add-new-solution');
    Route::post('/save-solution-info','App\Http\Controllers\Admin\SolutionController@saveSolutionInfo')->name('save-solution-info');
    Route::get('/delete-solution/{id}','App\Http\Controllers\Admin\SolutionController@trashSolutionInfo')->name('trash-solution');
    Route::get('/delete-solution-translate/{id}','App\Http\Controllers\Admin\SolutionController@trashSolutionOnlyTranslate')->name('trash-solution-translate');
//News
    Route::get('/news','App\Http\Controllers\Admin\NewsController@index')->name('news');
    Route::get('/add-news/{id}/{key}/{lang?}','App\Http\Controllers\Admin\NewsController@addNews')->name('add-news');
    Route::post('/save-news','App\Http\Controllers\Admin\NewsController@saveNews')->name('save-news');
    Route::get('/delete-news/{id}','App\Http\Controllers\Admin\NewsController@trashNewsInfo')->name('trash-news');
    Route::get('/delete-news-translate/{id}','App\Http\Controllers\Admin\NewsController@trashNewsOnlyTranslate')->name('trash-news-translate');
//Contact
    Route::get('/contact','App\Http\Controllers\Admin\ContactController@index')->name('contact');
    Route::post('/save-contact','App\Http\Controllers\Admin\ContactController@saveContactParametrs')->name('save.contact');
//Support
    Route::get('/support','App\Http\Controllers\Admin\SupportController@index')->name('support');
    Route::post('/support-video','App\Http\Controllers\Admin\SupportController@saveTutorialVideo')->name('save.video');
    Route::get('/new-faq/{id}/{key}/{lang?}','App\Http\Controllers\Admin\SupportController@addNewFaq')->name('add-new-faq');
    Route::post('/save-faq','App\Http\Controllers\Admin\SupportController@saveFaq')->name('save-faq-info');
    Route::get('/delete-support/{id}','App\Http\Controllers\Admin\SupportController@trashSupportInfo')->name('trash-support');
    Route::get('/delete-support-translate/{id}','App\Http\Controllers\Admin\SupportController@trashSupportOnlyTranslate')->name('trash-support-translate');
//Logout Admin Panel
    Route::get('/logout','App\Http\Controllers\Admin\LoginController@handleLogout')->name('logout.handle');
});


Route::post('/login','App\Http\Controllers\Admin\LoginController@handleLogin')->name('login.handle')->middleware('guest');
Route::view('/coco', '/admin/auth/login')->name('login')->middleware('guest');
