<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('account')->name('account.')->group(function(){

    Route::prefix('admin')->name('admin.')->group(function(){
        resss
    });

    Route::prefix('user')->name('user.')->group(function(){
        
    });

});