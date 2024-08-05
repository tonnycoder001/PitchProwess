@include('layouts.nav')
<script src="https://cdn.tailwindcss.com"></script>
<div class="container mx-auto py-8 relative">
    <div class="relative">
        <img src="{{ $news->image }}" alt="{{ $news->title }}" class="  mb-4">
        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50  p-4">
            <h1 class="text-5xl font-bold pt-96 uppercase">{{ $news->title }}</h1>
        </div>
    </div>

    <div class="max-w-3xl mx-auto px-4 pt-4">
        <p class="text-gray-700 mt-4">{{ $news->body }}</p>
    </div>
    <div class="text-sm text-blue-500 italic mt-4 max-w-3xl mx-auto px-4 pb-6">
        <span>by {{ $news->author }}</span> |
        <span>Published on {{ $news->created_at->format('F j, Y, g:i a') }}</span>
    </div>
</div>
@include('layouts.footer')
