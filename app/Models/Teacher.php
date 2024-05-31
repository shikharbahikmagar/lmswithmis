<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Authenticatable   
{
    use HasFactory;
    protected $guard = 'teacher';
        protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

        protected $hidden = [
        'password',
        'remember_token',
    ];
}
