<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rules\Uppercase;

class UserController extends Controller
{
    public function AddUser(Request $req){
        $req->validate([
            'username'=>['required',new Uppercase],
            'useremail'=>'required|email'
        ]);
        return $req->all();
    }
}
