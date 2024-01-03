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

// Route::get('/test',function(){
//     return view('test',['name'=>'Ruban','city'=>"Naihati",'alert'=>'<script>alert("Hello");</script>']);
// });

// Route::get('/test',function(){
//     return view('test')->with('name','Ruban')->with('city','Naihati')->with('alert','<script>alert("Hello");</script>');
// });

// Route::get('/test',function(){
//     return view('test')->withName('Ruban')->withCity('Naihati')->withAlert('<script>alert("Hello");</script>');
// });

function getusers(){
    return [
        1=>['name'=>'Ruban','phone'=>'6289814242','city'=>'Naihati'],
        2=>['name'=>'Soumita','phone'=>'9883760672','city'=>'Bhadreswar'],
        3=>['name'=>'Altab','phone'=>'9883760677','city'=>'Chuchura'],
        4=>['name'=>'Sovon','phone'=>'9883860672','city'=>'Tarakeswar'],
    ];
}

Route::get('/test',function(){
    $names=getusers();
    return view('test',['user'=>$names]);
});

Route::get('/test/{id}', function($id){
    $users=getusers();
    abort_if(!isset($users[$id]), 404);
    $user=$users[$id];
    return view('records',['id'=>$user]);
})->name('users.view');
