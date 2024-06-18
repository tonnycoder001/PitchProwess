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
    <div class="container mx-auto">
        <h1 class="text-center text-3xl font-bold mb-8">Team News</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($news as $article)
                <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer transition transform hover:scale-105"
                    onclick="window.location.href='route{{ 'new.show', $article->id }}">
                    <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-bold mb-2">{{ $article->title }}</h2>
                        <p class="text-gray-700 mb-4">{{ $article->excerpt }}</p>
                        <p class="text-sm text-blue-500">Published by {{ $article->author }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
