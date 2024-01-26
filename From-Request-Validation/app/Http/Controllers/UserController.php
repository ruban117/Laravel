<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function AddUsers(UserRequest $req){
        //return $req->all();
        //return $req->only(['username','userpass']);
        return $req->except(['username','userpass']);
    }
}
