<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/Ruban',function(){
    return view('Ruban');
});


Route::get('/Amul/{id?}/Comment/{comment?}',function(string $id=null, string $cmt=null){
    if($id){
        return "<h1>Id = ".$id."</h1> <h2>".$cmt."</h2>";
    }else{
        return "<h1>Id Not Found";
    }
});

Route::get('/New/{id?}', function(string $id=null){
    if($id){
        return "<h1>Id = ".$id."</h1>";
    }else{
        return "<h1>Id Not Found";
    }
})->whereNumber('id');


Route::get('/Next/{id?}', function(string $id=null){
    if($id){
        return "<h1>Id = ".$id."</h1>";
    }else{
        return "<h1>Id Not Found";
    }
})->whereAlphaNumeric('id');

Route::get('/Next2/{id?}/comment/{cid?}', function(string $id=null, string $comment=null){
    if($id){
        return "<h1>Id = ".$id."</h1> And Comment= ".$comment."";
    }else{
        return "<h1>Id Not Found";
    }
})->whereIn('category',['movie','song'])->whereAlpha('cid');


Route::get('/Ruban/Name', function(){
    return "<h1>Ruban Pathak</h1>";
})->name('Ruban');

Route::get('/Soumita/Name', function(){
    return "<h1>Soumita Pathak</h1>";
})->name('Soumita');

Route::get('/test',function(){
    return view('About');
});

Route::redirect('/About','/test',301);

//Route Groups

Route::prefix('page')->group(function(){
    Route::get('/Home', function(){
        return "<h2>This Is Our Home Page</h1>";
    });

    Route::get('/Aboutus', function(){
        return "<h2>This Is Our About-Us Page</h1>";
    });

    Route::get('/Contact', function(){
        return "<h2>This Is Our Contact Page</h1>";
    });
});