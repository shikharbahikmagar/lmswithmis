<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Student extends Authenticatable
{
    use HasFactory;
    protected $guard = 'student';
        protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
    ];

        protected $hidden = [
        'password',
        'remember_token',
    ];

    public function grades()
    {
        return $this->belongsTo('App\Models\Grade', 'grade_id')->select('id', 'grade_name');
    }
}
