<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('tractors','alldata')->name('alldata');
    Route::get('tractor/{slug}','vehicle')->name('vehicle');
    Route::get('login','index')->name('login');
    
});
Route::controller(AuthController::class)->group(function(){
    Route::post('login','login');
    Route::post('register','register')->name('register');
    Route::get('google/redirect', 'redirectToGoogle')->name('google.redirect');
    Route::get('google/callback', 'handleGoogleCallback')->name('google.callback');
    Route::get('facebook/redirect', 'redirectToGoogle')->name('facebook.redirect');
    Route::get('facebook/callback', 'handleGoogleCallback')->name('facebook.callback');
});

Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/','index')->name('dashboard');
        Route::get('mytractors','mytractors')->name('mytractors');
        Route::get('myfavourites','myfavourites')->name('favourites');
        Route::get('messages','messages')->name('messages');
        Route::get('profile','profile')->name('profile');
        Route::post('update-profile','updateprofile')->name('update.profile');
        Route::get('add-tractor','addvehicle')->name('create.vehicle');
        Route::post('add-vehicle','storevehicle')->name('store.vehicle');
    });
});

