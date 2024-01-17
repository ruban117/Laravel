<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function UsingRawSQL(){
        $select=DB::select('select * from people');
        $where=DB::select('select * from people where age > ?',[22]);

        $insert=DB::insert('insert into people (name,email,age,city) values (?,?,?,?)',["Ruban Pathak","rubanpathak706@gmail.com",20,'Naihati']);

        $update=DB::update('update people set age= 21 where id=?',[21]);

        $delete=DB::delete('delete from people where id=?',[21]);

        $selectraw=DB::table('people')
                ->selectRaw('*')
                ->get();

        $whereRaw=DB::table('people')
                ->whereRaw('age > ?',[22])
                ->get();

        $orderByRaw=DB::table('people')
                    ->orderByRaw('age, city')
                    ->get();

        $groupby=DB::table('people')
                    ->selectRaw('count(*) as student_count, age')
                    ->groupBy('age')
                    ->havingRaw('age > ?',[20])
                    ->get();

        
        return $groupby;
    }
}
