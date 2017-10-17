<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
    public function show()
    {
        $news = News::orderBy('id', 'desc')->take(10)->get();


        dump($news);
        return view('news', ['news' => $news]);
    }
}
