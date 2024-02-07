<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    public function AddStudent(Request $req){
        $stu=Student::create([
            'name'=>$req->uname,
            'email'=>$req->uemail,
            'city'=>$req->ucity,
            'password'=>$req->upass
        ]);

        if($stu){
            $u=Student::find(1);
            return dd($u->name);
        }
    }
}
