<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function AddStudent(Request $req){
        $path=$req->file('upic')->store('avatars','public');
        $res=Student::create([
            'name'=>$req->uname,
            'email'=>$req->uemail,
            'avatar'=>$path
        ]);

        if($res){
            return redirect(route('home'));
        }
    }

    public function ViewStudents(Request $req){
        $stu=Student::paginate(5);
        return view('Students',['students'=>$stu]);
    }
}
