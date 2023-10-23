<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    private static $courses = [
        [
            'code' => 'Wd',
            'name' => 'Web Dev',
            'lecturer' => 'Bu Laura',
            'sks' => '4',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        ],
        [
            'code' => 'Ad',
            'name' => 'App Dev',
            'lecturer' => 'Pak Richard',
            'sks' => '5',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        ],
        [
            'code' => 'Os',
            'name' => 'Operating System',
            'lecturer' => 'Pak Dan',
            'sks' => '3',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        ],
        [
            'code' => 'Dm',
            'name' => 'Math',
            'lecturer' => 'Bu Citra',
            'sks' => '3',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        ],
    ];

    public static function allData()
    {
        return collect(self::$courses);
    }

    public static function courseWithCode($code)
    {
        $allCourse = static::allData();
        return $allCourse->firstWhere('code', $code);
    }
}
