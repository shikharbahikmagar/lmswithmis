<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo('App\Models\Category', 'category_id')->select('id', 'category_name');
    }

    public function added_by_details()
    {
        return $this->belongsTo('App\Models\Admin', 'admin_id')->select('id', 'name');
    }
}
