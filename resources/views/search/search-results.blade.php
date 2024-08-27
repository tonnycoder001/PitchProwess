@include('layouts.nav')
<div class="border-t border-gray-500 my-2"></div>

<div class="min-h-screen flex flex-col mt-6">

    <div class="container mx-auto flex-grow">


        <h1 class="text-center mt-6 font-bold text-2xl">Search Results</h1>



        @if ($players->isEmpty())
            <p class="text-center mt-6 font-bold text-2xl">No players found.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-12">
                @foreach ($players as $player)
                    <div class="border rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        <img src="{{ $player->image }}" alt="{{ $player->name }}" class="w-full h-96 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold mb-2">{{ $player->full_name }}</h2>
                            <p class="text-gray-700 font-semibold">Age: {{ $player->age }}</p>
                            <p class="text-gray-700 font-semibold">Nationality: {{ $player->nationality }}</p>
                            <p class="text-gray-700 font-semibold">Position: {{ $player->position }}</p>
                            <span class="text-blue-500 font-semibold">Category: {{ $player->category }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>⃪
    @include('layouts.footer')
</div>
