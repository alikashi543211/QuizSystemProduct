<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';



// Front Routes
Route::namespace("Front")->group(function(){
    Route::get('/', 'HomeController@home')->name("home");
    Route::get('admin/login', 'LoginController@adminLoginForm')->name("admin.login.form");

    Route::post('user/login', 'LoginController@login')->name("front.login");
});



// Admin Auth Routes
Route::prefix('admin')->name('admin.')->namespace('Admin')->middleware('auth','admin')->group(function() {
    
    Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
    Route::get('profile/{tab?}','ProfileController@index')->name('profile');
    Route::post('general-update','ProfileController@generalUpdate')->name('profile.general.update');
    Route::post('password-update','ProfileController@passwordUpdate')->name('profile.password.update');
    Route::post('setting-save', 'SettingController@save')->name('setting.save');

    Route::prefix('cms')->name('cms.')->group(function() {
        Route::get('general', 'SettingController@general')->name('general');
    });

    Route::name('mcq.')->prefix('mcq')->group(function () {
        Route::get('list', 'McqController@list')->name('list');
        Route::get('add', 'McqController@add')->name('add');
        Route::post('save/{id?}', 'McqController@save')->name('save');
        Route::get('edit/{id}', 'McqController@edit')->name('edit');
        Route::get('delete/{id}', 'McqController@delete')->name('delete');
    });
    

});