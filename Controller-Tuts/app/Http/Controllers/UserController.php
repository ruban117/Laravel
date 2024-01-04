<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Show(){
        return view('Test');
    }

    public function Home(String $id){
        return view('Home',["id"=>$id]);
    }

    public function About(){
        return view('About');
    }
}
