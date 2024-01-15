<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

class UserController extends Controller
{
    public function ShowStudents(){
        $student=DB::table('students')
                    ->join('cities','students.city_id','=','cities.id')
                    ->where('cities.city_name','=','Mumbai')
                    ->select('students.name','students.age','cities.city_name')
                    ->get();

        $students=DB::table('students')
                    ->join('cities','students.city_id','=','cities.id')
                    ->select(DB::raw("count(*) as student_count"),'age')
                    ->groupBy('age')
                    ->get();


        $stu=DB::table('students')
            ->leftJoin('cities',function(JoinClause $join){
                $join->on('students.city_id','=','cities.id')
                ->where('students.age','>=',21);
            })
            ->select('students.name','students.age','cities.city_name')->get();
        return $stu;
    }
}
