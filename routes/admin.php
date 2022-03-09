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
//News
    Route::get('/news','App\Http\Controllers\Admin\NewsController@index')->name('news');
    Route::get('/add-news','App\Http\Controllers\Admin\NewsController@addNews')->name('add-news');
    Route::post('/save-news','App\Http\Controllers\Admin\NewsController@saveNews')->name('save-news');

//Logout Admin Panel
    Route::get('/logout','App\Http\Controllers\Admin\LoginController@handleLogout')->name('logout.handle');
});


Route::post('/login','App\Http\Controllers\Admin\LoginController@handleLogin')->name('login.handle')->middleware('guest');
Route::view('/coco', '/admin/auth/login')->name('login')->middleware('guest');
