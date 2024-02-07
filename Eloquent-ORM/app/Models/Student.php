<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'city', 'password',
    ];

    protected function password():Attribute
    {
        return Attribute::make(
            set:fn($value)=>bcrypt($value)
        );
    }

    // protected function name():Attribute
    // {
    //     return Attribute ::make(
    //         set:fn($value)=>strtoupper($value)
    //     );
    // }


    protected function name():Attribute
    {
        return Attribute ::make(
            get:fn($value)=>strtoupper($value)
        );
    }
}
