<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $json=File::get(path: 'database/json/students.json');
        // $students=collect(json_decode($json));
        // $students->each(function($s){
        //     student::create([
        //         'name'=>$s->name,
        //         'email'=>$s->email
        //     ]);
        // });

        for($i=1;$i<=20;$i++){
            student::create([
                'name'=>fake()->name(),
                'email'=>fake()->unique()->email()
            ]);
        }
    }
}
