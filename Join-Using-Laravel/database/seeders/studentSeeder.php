<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\student;
class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=File::get(path:'database/json/students.json');
        $students=collect(json_decode($json));
        $students->each(function($c){
            student::create([
                'name'=>$c->name,
                'age'=>$c->age,
                'city_id'=>$c->city_id,
            ]);
        });
    }
}
