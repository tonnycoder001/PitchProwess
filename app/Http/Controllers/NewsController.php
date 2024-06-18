<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.news', compact('news'));
    }

    public function show($id)
    {
        $article = News::findOrFail($id);

        return view('news.show', compact('article'));
    }
}
