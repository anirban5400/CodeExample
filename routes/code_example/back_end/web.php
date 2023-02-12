<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CodeExample\BackEnd\Web\DashboardController;
// class_alias('App\Http\Controllers\CodeExample\BackEnd\Web\DashboardController', 'CE_BE_W_Dashboard');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])
    ->prefix('code')->as('code.')
    ->controller('App\Http\Controllers\CodeExample\BackEnd\Web\DashboardController')->group(function () {
    Route::get('/dashboard','home')->name('dashboard');
    Route::get('/home','home')->name('home');

    Route::prefix('blog')->as('blog.')->group(function () {
        Route::get('list','blog_list')->name('list');
        Route::get('add','blog_add')->name('add');
        Route::get('edit','blog_edit')->name('edit');
    });
    
});