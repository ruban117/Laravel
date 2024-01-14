<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function ViewUser(){
        $users=DB::table('paginations')
                ->paginate(4);
        return view('paginationcrud',['data'=>$users]);
    }

    public function Insert(Request $req){
        $users=DB::table('paginations')
                ->insert([
                    'name'=>$req->username,
                    'email'=>$req->useremail,
                    'age'=>$req->userage,
                    'city'=>$req->usercity,
                ]);
        if($users){
            return redirect()->route('viewuser');
        }
    }

    public function Update(Request $req , $id){
        $users=DB::table('paginations')
                ->where('id',$id)
                ->update([
                    'name'=>$req->username,
                    'email'=>$req->useremail,
                    'age'=>$req->userage,
                    'city'=>$req->usercity,
                ]);
        if($users){
            return redirect()->route('viewuser');
        }
    }

    public function ViewUpdate($id){
        $users=DB::table('paginations')
                ->find($id);
        return view('update', ['data'=>$users]);
    }


    public function DeleteUser($id){
        $users=DB::table('paginations')
                ->where('id',$id)
                ->delete();
        if($users){
            return redirect()->route('viewuser');
        }
    }
}
