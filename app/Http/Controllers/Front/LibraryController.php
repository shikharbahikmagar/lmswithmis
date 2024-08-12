<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Book;
use App\Models\Category;

class LibraryController extends Controller
{
    public function library()
    {
        // Paginator::useBootstrap();

        $banners = Banner::orderBy('id', 'desc')->take(5)->where('status', '1')->get();
        $banners = json_decode(json_encode($banners), true);

        $books = Book::with('added_by_details', 'categories')->latest()->paginate(8);
        // /$books = json_decode(json_encode($books), true);

        $book_categories = Category::orderBy('id', 'desc')->get();
        $book_categories = json_decode(json_encode($book_categories), true);

        //echo "<pre>"; print_r($books); die;

        return view('front.eschool.library')->with(compact('banners', 'books', 'book_categories'));
    }

    public function bookDetails($id = null)
    {
        $banners = Banner::orderBy('id', 'desc')->take(5)->where('status', '1')->get();
        $banners = json_decode(json_encode($banners), true);

        $book_details = Book::with('categories')->where('id', $id)->first();
        $book_details = json_decode(json_encode($book_details), true);

        $relatedBooks = BOok::where('category_id', $book_details['category_id'])->where('id', '!=', $id)->limit(4)->inRandomOrder()
        ->get()->toArray();
        //echo "<pre>"; print_r($relatedBooks); die;

        return view('front.eschool.book_details.book_details')->with(compact('banners', 'book_details', 'relatedBooks'));
    }
}
