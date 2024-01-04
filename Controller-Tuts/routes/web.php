<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\TestingController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/controller','Show')->name('Testing');
    Route::get('/controller/{id}','Home')->name('HomePage');
    Route::get('/About','About')->name('AboutPage');
});

Route::get('/NewTest',TestingController::class);

// Route::get('/controller',[UserController::class,'Show'])->name('Testing');
// Route::get('/controller/{id}',[UserController::class,'Home'])->name('HomePage');
// Route::get('/About',[UserController::class,'About'])->name('AboutPage');
