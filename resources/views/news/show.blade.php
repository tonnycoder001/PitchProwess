<div class="container mx-auto py-8 relative">
    <div class="relative">
        <img src="{{ $news->image }}" alt="{{ $news->title }}" class="w-full h-96 object-cover mb-4">
        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white p-4">
            <h1 class="text-4xl font-bold">{{ $news->title }}</h1>
        </div>
    </div>
    <p class="text-gray-700 mt-4">{{ $news->body }}</p>
    <div class="text-sm text-blue-500 italic mt-4">
        <span>Published by {{ $news->author }}</span> |
        <span>Published on {{ $news->created_at->format('F j, Y, g:i a') }}</span>
    </div>
</div>
