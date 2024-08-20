@include('layouts.nav')
<div class="border-t border-gray-300 my-2"></div>

<div class="flex flex-col min-h-screen">
    <div class="container mx-auto py-8 flex-1">
        <div>
            <img src="{{ $news->image }}" alt="{{ $news->title }}" class="w-full h-100 object-cover">
            <h1 class="text-3xl font-bold text-center uppercase mt-6">{{ $news->title }}</h1>
        </div>
        <div class="max-w-3xl mx-auto px-4 pt-4">
            <p class="text-gray-700 mt-4">{{ $news->body }}</p>
        </div>
        <div class="text-sm text-blue-500 italic mt-4 max-w-3xl mx-auto px-4 pb-6">
            <span>by {{ $news->author }}</span> |
            <span>Published on {{ $news->created_at->format('F j, Y, g:i a') }}</span>
        </div>
    </div>

    <div class="border-t border-gray-800 mt-6">
        @include('layouts.footer')
    </div>
</div>
