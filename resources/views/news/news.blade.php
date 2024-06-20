@extends('layouts.nav')

@section('content')
    <div class="container mx-auto py-8 pb-12">
        <h1 class="text-center text-4xl font-bold mb-12">Team News</h1>

        @foreach ($news as $article)
            <div class="news-article bg-white rounded-lg shadow-lg mb-6 overflow-hidden">
                <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-auto  object-contain">
                <div class="p-4">
                    <h2 class="text-2xl font-semibold mb-2">{{ $article->title }}</h2>
                    <p class="text-gray-700 mb-2">{{ $article->body }}</p>
                    <div class="text-sm text-blue-500 mb-2 underline italic">
                        <span>Published by {{ $article->author }}</span> |
                        <span>Published on {{ $article->created_at->format('F j, Y, g:i a') }}</span>
                    </div>




                </div>
            </div>
        @endforeach
    </div>
    @include('layouts.footer')
@endsection
