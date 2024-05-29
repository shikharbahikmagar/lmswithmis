<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'link',
        'description',
        'attachment',
    ];

    public function added_by()
    {
        return $this->belongsTo('App\Models\Admin', 'admin_id')->select('id', 'name');
    }

    public function notice_categories()
    {
        return $this->belongsTo('App\Models\NoticeCategory', 'notice_cat_id')->select('id', 'category_name');
    }
}
