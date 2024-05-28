<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function grades()
    {
        return $this->belongsTo('App\Models\Grade', 'grade_id')->select('id', 'grade_name');
    }
}
