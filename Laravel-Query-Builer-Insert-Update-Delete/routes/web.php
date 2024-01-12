<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RubanController;

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

Route::get('/Home',[RubanController::class,'AllUsers'])->name('allusers');
Route::get('/Add',[RubanController::class,'AddUser']);
Route::get('/Update',[RubanController::class,'updateUser']);
Route::get('/Delete/{id}',[RubanController::class,'DeleteUser'])->name('delete');