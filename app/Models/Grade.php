<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    public static function getGrades()
    {
        $grades = Grade::get();

        return $grades;
    }
}
