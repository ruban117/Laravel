<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function UnionTables(){
        $students=DB::table('students');
        $lecturers=DB::table('lecturers')
                ->union($students)
                ->get();
        return $lecturers;
    }

    public function JoinUnionTables(){
        $lecturers=DB::table('lecturers')
                    ->select('name','email','city_name')
                    ->join('cities','lecturers.city','=','cities.id');
        $students=DB::table('students')
                    ->union($lecturers)
                    ->select('name','age','city_name')
                    ->join('cities','students.city_id','=','cities.id')
                    ->get();
        return $students;
    }

    public function UsingWhen(){
        $students=DB::table('students')
                ->when(false,function($q){
                    $q->where('age','<',18);
                },function($q){
                    $q->where('age','>',18);
                })
                ->get();
        return $students;
    }

    public function UsingChunk(){
        $students=DB::table('students')
                ->orderBy('id')
                ->chunk(3,function($students){
                    echo "<div style='border:2px solid red; margin-top:2px'>";
                    foreach($students as $s){
                        echo $s->name. "<br>";
                    }
                    echo "</div>";
                });
    }
}
