<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        return view('crudajax');
    }

    public function fetchAll(){
        $student=Student::all();
        $output='';
        if($student->count() > 0){
            $output .= '<table class="table table-striped align-middle>"
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
            $i=1;
            foreach($student as $rs){
                $output .= '<tr>
                <td>' . $i . '</td>
                <td><img src="storage/' . $rs->Image . '" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $rs->First_Name . ' ' . $rs->Last_Name . '</td>
                <td>' . $rs->Email_Id . '</td>
                <td>
                  <a href="#" id="' . $rs->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editStudentModal"><i class="bi-pencil-square h4"></i></a>
                  <a href="#" id="' . $rs->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                </td>
              </tr>';
              $i++;
            }

            $output.='</tbody></table>';
            echo $output;
        }else{
            echo '<h1 class="text-center text-secondary my-5">No Record Found In The Database</h1>';
        }
    }

    public function store(Request $req){

        $file= $req->file('image');

        $filename=time().''.$file->getClientOriginalName();
        $filepath=$file->storeAs('images',$filename,'public');

        DB::table('students')
               ->insert([
                    'First_Name'=>$req->fname,
                    'Last_Name'=>$req->lname,
                    'Email_Id'=>$req->email,
                    'Image'=>$filepath
               ]);


        return response()->json(['res'=>'geted']);
    }
}
