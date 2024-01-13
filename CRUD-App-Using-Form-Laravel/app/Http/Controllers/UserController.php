<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function viewUsers(){
        $users=DB::table('users')
               ->get();
        return view('crud',['data'=>$users]);
    }

    public function addUsers(Request $req){
        $users=DB::table('users')
               ->insert([
                    'name'=>$req->username,
                    'email'=>$req->useremail,
                    'city'=>$req->usercity,
                    'phone'=>$req->userphone
               ]);
        if($users){
            return redirect()->route('viewuser');
        }else{
            echo "<h1>Failed To Add User</h1>";
        }
    }

    public function DeleteUser(String $id){
        $users=DB::table('users')
              ->where('id',$id)
              ->delete();
        if($users){
            return redirect()->route('viewuser');
        }
    }

    public function UpdateUserView(string $id){
        $users=DB::table('users')
                ->find($id);
        return view('update',['data'=>$users]);
    }

    public function UpdateUser(Request $req, $id){
        $users=DB::table('users')
                ->where('id', $id)
                ->update([
                    'name'=>$req->username,
                    'email'=>$req->useremail,
                    'city'=>$req->usercity,
                    'phone'=>$req->userphone
                ]);
        if($users){
            return redirect()->route('viewuser');
        }
    }
}
