<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class BooksController extends Controller
{
    public function categories()
    {
        $cat_details = Category::get();
        // echo "<pre>"; print_r($cat_detail); die;
        return view('admin.books.categories.categories')->with(compact('cat_details'));
    }
}
