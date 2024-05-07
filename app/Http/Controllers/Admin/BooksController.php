<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function books()
    {
        $books = Book::with(['categories', 'added_by_details'])->get();
        $books = json_decode(json_encode($books), true);
        // echo "<pre>"; print_r($books); die;
        return view('admin.books.books')->with(compact('books'));
    }

    public function addEditBook(Request $request)
    {
        return view('admin.books.add_edit_books');
    }
}
