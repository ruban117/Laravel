<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    Route::get('/crud','viewUsers')->name('viewuser');

    Route::post('/add','addUsers')->name('insert');

    Route::get('/delete/{id}','DeleteUser')->name('delete');

    Route::get('/updateuser/{id}','UpdateUserView')->name('updateview');

    Route::post('/update/{id}','UpdateUser')->name('Update');
});




