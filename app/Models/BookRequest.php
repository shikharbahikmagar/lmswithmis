<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookRequest extends Model
{
    use HasFactory;

    public function student_details()
    {
        return $this->belongsTo('App\Models\Student', 'student_id')->select('id', 'email', 'first_name', 'middle_name', 'last_name');
    }

    public function book_details()
    {
        return $this->belongsTo('App\Models\Book', 'book_id')->select('id','title', 'author', 'isbn_no');
    }
}
