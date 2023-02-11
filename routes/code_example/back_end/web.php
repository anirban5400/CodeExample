<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CodeExample\BackEnd\Web\DashboardController;
class_alias('App\Http\Controllers\CodeExample\BackEnd\Web\DashboardController', 'CE_BE_W_Dashboard');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])
    ->prefix('code')->as('code.')
    ->controller('CE_BE_W_Dashboard')->group(function () {
    Route::get('/dashboard','overview')->name('dashboard');
    Route::get('/overview','overview')->name('overview');
});