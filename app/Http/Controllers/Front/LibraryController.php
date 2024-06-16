<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class LibraryController extends Controller
{
    public function library()
    {
        $banners = Banner::orderBy('id', 'desc')->take(5)->get();
        $banners = json_decode(json_encode($banners), true);

        return view('front.eschool.library')->with(compact('banners'));
    }
}
