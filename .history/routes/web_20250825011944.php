<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    return "test";
});

Route::prefix('admin')->name('admin.')->group(function(){

});

Route::prefix('user')->name('user.')->group(function(){
    
});