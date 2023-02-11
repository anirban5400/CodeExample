<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Main\Web\DashboardController;
class_alias('App\Http\Controllers\Main\Web\DashboardController', 'MainDashboard');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('front_end.pages.home');});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->controller('MainDashboard')->group(function () {
    Route::get('/blank', function () { return view('pages.blank');})->name('blank');
    Route::get('/dashboard', 'all_dashboard_menu')->name('dashboard');
    // Route::get('/all-dashboard-menu', 'all_dashboard_menu')->name('all_dashboard_menu');
});
