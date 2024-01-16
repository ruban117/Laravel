<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\lecturer;

class lecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json=File::get(path:'database/json/lecturers.json');
        $cities=collect(json_decode($json));
        $cities->each(function($c){
            lecturer::create([
                'name'=>$c->name,
                'email'=>$c->email,
                'city'=>$c->city
            ]);
        });
    }
}
