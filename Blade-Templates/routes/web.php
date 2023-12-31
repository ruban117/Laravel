<?php

use Illuminate\Support\Facades\Route;

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



Route::prefix('Blade')->group(function(){
    Route::get('/Basic',function(){
        return view('Basic_Blade');
    });

    Route::get('/Inter_Blade', function(){
        return view('Intermidiate_Blade');
    });
});


Route::get('/Reusable',function(){
    return view('ReusableTemplates');
});