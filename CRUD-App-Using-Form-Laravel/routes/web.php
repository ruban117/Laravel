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

Route::get('/crud',[UserController::class,'viewUsers'])->name('viewuser');

Route::get('/crud/add',function(){return view('add');})->name('adduser');

Route::post('/add',[UserController::class,'addUsers'])->name('insert');

Route::get('/delete/{id}',[UserController::class,'DeleteUser'])->name('delete');
