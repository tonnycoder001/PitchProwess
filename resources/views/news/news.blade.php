<div class="container mx-auto py-8 pb-12">
    <h1 class="text-center text-4xl font-bold mb-12">Team News</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($news as $article)
            <a href=""
                class="block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="relative">
                    <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black opacity-40"></div>
                    <div class="absolute inset-0 flex flex-col justify-end px-6 py-4 text-white">
                        <h2 class="text-2xl font-semibold mb-2">{{ $article->title }}</h2>
                        <p class="text-gray-300">{{ Str::limit(strip_tags($article->body), 150) }}</p>
                        <div class="text-sm text-blue-500 italic mt-2">
                            <span>Published by {{ $article->author }}</span> |
                            <span>Published on {{ $article->created_at->format('F j, Y, g:i a') }}</span>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
