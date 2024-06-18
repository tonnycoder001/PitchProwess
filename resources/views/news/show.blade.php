@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-bold mb-4">{{ $article->title }}</h1>
        <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-64 object-cover mb-4">
        <p class="text-gray-700 leading-relaxed">{{ $article->body }}</p>
        <p class="text-sm text-blue-500 mt-2">Published by {{ $article->author }}</p>
    </div>
@endsection
