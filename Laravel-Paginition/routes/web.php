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
    Route::get('/pagecrud','ViewUser')->name('viewuser');

    Route::get('/updateview/{id}','ViewUpdate')->name('viewupdate');

    Route::get('/delete/{id}','DeleteUser')->name('delete');

    Route::post('/adduser','Insert')->name('adduser');

    Route::post('/updateuser/{id}','Update')->name('update');
});