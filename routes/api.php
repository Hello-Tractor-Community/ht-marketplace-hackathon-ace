<?php

use App\Http\Controllers\api\FunctionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(FunctionsController::class)->group(function(){
    Route::post('chat','savechat')->name('save.chat');
    Route::post('favourite','favourite')->name('save.favourite');
});