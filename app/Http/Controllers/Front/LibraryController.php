<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Book;
use App\Models\Category;

class LibraryController extends Controller
{
    public function library()
    {

        $banners = Banner::orderBy('id', 'desc')->take(5)->where('status', '1')->get();
        $banners = json_decode(json_encode($banners), true);

        $books = Book::with('added_by_details', 'categories')->orderBy('id', 'desc')->get();
        $books = json_decode(json_encode($books), true);

        $book_categories = Category::orderBy('id', 'desc')->get();
        $book_categories = json_decode(json_encode($book_categories), true);

        //echo "<pre>"; print_r($books); die;

        return view('front.eschool.library')->with(compact('banners', 'books', 'book_categories'));
    }
}
