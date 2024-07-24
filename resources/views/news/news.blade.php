<script src="https://cdn.tailwindcss.com"></script>
@include('layouts.nav')
<div class="border-t border-gray-800 my-6"></div>

<div class=" mx-auto py-8 pb-12 p-6">
    <h1 class="text-center text-4xl font-bold mb-12">Team News</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-6">
        @foreach ($news as $article)
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 p-4">
                    <h2 class="text-2xl font-semibold mb-2">{{ $article->title }}</h2>
                    <p class="text-gray-700">{{ Str::limit(strip_tags($article->body), 150) }}</p>
                    <div class="text-sm text-blue-500 italic mt-2">
                        <span>Published by {{ $article->author }}</span> |
                        <span>Published on {{ $article->created_at->format('F j, Y, g:i a') }}</span>
                    </div>
                </div>
                <div class="md:w-1/2 relative">
                    <img src="{{ $article->image }}" alt="{{ $article->title }}"
                        class="w-full h-64 md:h-full object-cover">
                    <div class="absolute inset-0 bg-black opacity-40"></div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('layouts.footer')
