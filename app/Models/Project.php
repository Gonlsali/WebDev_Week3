<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    private static $projects = [
        [
            'title' => 'calculator',
            'code' => 'cal',
            'course' => 'Algorithm and Programming'
        ],
        [
            'title' => 'Accounting',
            'code' => 'acc',
            'course' => 'Web Programming'
        ],
        [
            'title' => 'Student Report',
            'code' => 'stu',
            'course' => 'Web Development'
        ],
    ];

    public static function allData()
    {
        return collect(self::$projects);
    }

    public static function dataWithCode($code)
    {
        $allProjects = static::allData();
        return $allProjects->firstWhere('code', $code);
    }
}
