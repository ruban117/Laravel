<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RubanController extends Controller
{
    public function AllUsers(){
        $users=DB::table('rubanones')
                ->get();
        return view('home',['data'=>$users]);
    }
//Insert A Record
    public function AddUser(){
        $users=DB::table('rubanones')
                // ->insert([
                //     [
                //         'name'=>'Virat Kohli',
                //         'email'=>'virat@2023yahoo.com',
                //         'phone'=>'(+91) 6541236987',
                //         'address'=>'Shaorafuni Red Light Area Hooghly, West Bengal',
                //         'age'=>18,
                //         'city'=>'Delhi'
                //     ],
                //     [
                //         'name'=>'Hardik Pandiya',
                //         'email'=>'pandiya@miyahoo.com',
                //         'phone'=>'(+91) 7412589631',
                //         'address'=>'Dhara Basti Mumbai, Maharashtra',
                //         'age'=>20,
                //         'city'=>'Mumbai'
                //     ]
                // ]);
                // ->insertOrIgnore([
                //         'name'=>'Virat Kohli',
                //         'email'=>'virat@2023yahoo.com',
                //         'phone'=>'(+91) 6541236987',
                //         'address'=>'Shaorafuni Red Light Area Hooghly, West Bengal',
                //         'age'=>18,
                //         'city'=>'Delhi'
                // ]);
                // ->upsert([
                //         'name'=>'Virat Kohli',
                //         'email'=>'virat@2023yahoo.com',
                //         'phone'=>'(+91) 6541236987',
                //         'address'=>'Shaorafuli Red Light Area Hooghly, West Bengal',
                //         'age'=>20,
                //         'city'=>'Naihati'
                //     ],['email'],['city']
                // );
                ->insertGetId([
                            'name'=>'Ravindra Jadeja',
                            'email'=>'ravindracsk@2023yahoo.com',
                            'phone'=>'(+91) 7452147852',
                            'address'=>'Sonagachi West Bengal North Calcutta',
                            'age'=>28,
                            'city'=>'Sovabazar Sutanuti'
                ]);
        if($users){
            return redirect()->route('allusers');
        }else{
            echo "<h1>Data Not Added</h1>";
        }
    }

    //update a record
    public function updateUser(){
        $users=DB::table('rubanones')
            ->where('id', 12)
            ->update([
                'name'=>'Atanu Paul'
            ]);
        //     ->updateOrInsert([
        //         'name'=>'Preetam Paul',
        //         'email'=>'preetam@2023yahoo.com'
        //     ],['age'=>28]
        // );
            if($users){
                return redirect()->route('allusers');
            }else{
                echo "<h1>Data Not Updated</h1>";
            }  
    }


    //delete a record

    public function DeleteUser(String $id){
        $users=DB::table('rubanones')
            ->where('id',$id)
            ->delete();
            if($users){
                return redirect()->route('allusers');
            } 
    }
}
