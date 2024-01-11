<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function Show(){
        $users=DB::table('students')->get();
        return view('allusers',['data'=>$users]);
    }
    public function SingleUser(String $id){
        $users=DB::table('students')->where('id',$id)->get();
        return view('user',['data'=>$users]);
    }
}
