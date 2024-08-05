<script src="https://cdn.tailwindcss.com"></script>
@include('layouts.nav')
<div class="border-t border-gray-800 my-6"></div>
<div class="mx-auto py-8 pb-12 p-6">
    <h1 class="text-center text-4xl font-bold mb-12">Team News</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
        @foreach ($news as $news)
            <div class="relative group border rounded-lg overflow-hidden">
                <a href="{{ route('article.show', $news->id) }}" class="block">
                    <img src="{{ $news->image }}" alt="{{ $news->title }}" class="w-full h-48 object-cover">
                    <div class="absolute inset-0 bg-black opacity-40 group-hover:opacity-50 transition-opacity"></div>
                    <div
                        class="absolute bottom-0 left-0 right-0 p-4 text-white bg-gradient-to-t from-black via-transparent to-transparent">
                        <h2 class="text-xl font-semibold">{{ $news->title }}</h2>
                    </div>
                </a>

            </div>
        @endforeach
    </div>
</div>
@include('layouts.footer')
