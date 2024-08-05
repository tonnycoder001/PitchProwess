<script src="https://cdn.tailwindcss.com"></script>
@include('layouts.nav')

<div class="border-t border-gray-800 my-6"></div>
<div class="mx-auto py-8 pb-12 p-6">
    <h1 class="text-center text-4xl font-bold mb-12">Team News</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
        @foreach ($news as $article)
            <div class="border rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <a href="{{ route('article.show', $article->id) }}" class="block">
                    <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-96 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">{{ $article->title }}</h2>
                        <p class="text-gray-700 text-sm mb-4">{{ Str::limit(strip_tags($article->body), 500) }}</p>
                        <span class="text-blue-500 font-semibold">Read More</span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="mt-8">
        {{ $news->links }}
    </div>
</div>

@include('layouts.footer')
