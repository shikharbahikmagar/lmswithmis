<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function event_categories()
    {
        return $this->belongsTo(EventCategory::class, 'event_cat_id')->select('id', 'category_name');
    }
}
