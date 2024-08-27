<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::paginate(6);
        return view('news.news', compact('news'));
    }
    public function show($id)
    {
        // if (auth()->guest()) {
        //     return redirect()->route('auth.register');
        // }

        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }
}
