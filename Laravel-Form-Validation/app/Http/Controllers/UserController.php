<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function Adduser(Request $req){
        $req->validate([
            'username'=>'required',
            'useremail'=>'required|email',
            'userage'=>'required|numeric',
            'usercity'=>'required|alpha'
        ],[
            'username.requried'=>'Email Id Is Requried',
        ]);

        return $req->all();
    }
}
