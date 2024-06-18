@extends('layouts.nav')

@section('content')
    <nav class="bg-white shadow-2xl p-8 pt-12">
        <div class="container mx-auto flex  ml-24">
            <ul class="flex space-x-4">
                <li><a href="/fixtures" class="text-black hover:text-gray-400">LATEST</a></li>
                <li><a href="/players" class="text-black hover:text-gray-400">MEN</a></li>
                <li><a href="/news" class="text-black hover:text-gray-400">WOMEN</a></li>
                <li><a href="/news" class="text-black hover:text-gray-400">ACADEMY</a></li>
            </ul>
        </div>
    </nav>
@endsection
{{-- <div class="container">
    <h1 class="text-center">Team News</h1>
    @foreach ($news as $article)
        <div class="news-article">
            <h2>{{ $article->title }}</h2>
            <img src="{{ $article->image }}" alt="{{ $article->title }}">
            <p>{{ $article->body }}</p>
            <p class="underline italic text-sm text-blue-500">published by{{ $article->author }}</p>

        </div>
    @endforeach
</div> --}}
