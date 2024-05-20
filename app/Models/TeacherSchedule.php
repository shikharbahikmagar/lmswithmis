<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherSchedule extends Model
{
    use HasFactory;
    public function subjects()
    {
        return $this->belongsTo('App\Models\Subject', 'subject_id')->select('id', 'subject_name');
    }

    public function teachers()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacher_id')->select('id', 'first_name', 'last_name');
    }

    public function classes()
    {
        return $this->belongsTo('App\Models\Grade', 'class_id')->select('id', 'grade_name');
    }
}
