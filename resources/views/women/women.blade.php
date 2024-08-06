<script src="https://cdn.tailwindcss.com"></script>
@include('layouts.nav')



<div class="border-t border-gray-500 my-2"></div>

<div class="flex-1 flex justify-center">
    <div class=" md:flex space-x-8">
        <div class="relative group">
            <a href="/seniors" class="hover:underline text-black ">Men</a>
        </div>
        <a href="/women" class="hover:underline text-black hidden md:flex">Women</a>
        <div class="relative group">
            <a href="/academyplayers" class="hover:underline text-black "> Academy</a>

        </div>
    </div>
</div>
<div class="container mx-auto px-4 mb-12 mt-6">
    <div class="flex justify-center mb-2 mr-6">
        <form action="{{ route('players.search') }}" method="GET" class="w-full max-w-sm">
            @csrf
            <div class="flex items-center">
                <input type="text" name="query" placeholder="Search players..."
                    class="p-2 border border-gray-300 rounded-l flex-grow">
                <button type="submit" class="p-2 bg-blue-500 text-white rounded-r">Search</button>
            </div>
        </form>
    </div>
    <h1 class="text-2xl font-bold text-center my-6">Women's Team</h1>

    <h2 class="text-xl font-semibold mt-6 mb-4">Goalkeepers</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
        @foreach ($goalkeepers as $player)
            <div class="border rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <img src="{{ $player->image }}" alt="{{ $player->name }}" class="w-full h-96 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $player->first_name }} {{ $player->last_name }}</h2>
                    <p class="text-gray-700 font-semibold">Age: {{ $player->age }}</p>
                    <p class="text-gray-700 font-semibold">Nationality: {{ $player->nationality }}</p>
                    <p class="text-gray-700 font-semibold">Foot: {{ $player->foot }}</p>
                    <p class="text-gray-700 font-semibold">Jersey: {{ $player->jersey_number }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="border-t border-gray-300 my-6"></div>

    <h2 class="text-xl font-semibold mt-6 mb-4">Defenders</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
        @foreach ($defenders as $player)
            <div class="border rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <img src="{{ $player->image }}" alt="{{ $player->name }}" class="w-full h-96 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $player->first_name }} {{ $player->last_name }}</h2>
                    <p class="text-gray-700 font-semibold">Age: {{ $player->age }}</p>
                    <p class="text-gray-700 font-semibold">Nationality: {{ $player->nationality }}</p>
                    <p class="text-gray-700 font-semibold">Foot: {{ $player->foot }}</p>
                    <p class="text-gray-700 font-semibold">Jersey: {{ $player->jersey_number }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="border-t border-gray-300 my-6"></div>

    <h2 class="text-xl font-semibold mt-6 mb-4">Midfielders</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
        @foreach ($midfielders as $player)
            <div class="border rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <img src="{{ $player->image }}" alt="{{ $player->name }}" class="w-full h-96 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $player->first_name }} {{ $player->last_name }}</h2>
                    <p class="text-gray-700 font-semibold">Age: {{ $player->age }}</p>
                    <p class="text-gray-700 font-semibold">Nationality: {{ $player->nationality }}</p>
                    <p class="text-gray-700 font-semibold">Foot: {{ $player->foot }}</p>
                    <p class="text-gray-700 font-semibold">Jersey: {{ $player->jersey_number }}</p>
                </div>
            </div>
        @endforeach
    </div>


    <div class="border-t border-gray-300 my-6"></div>

    <h2 class="text-xl font-semibold mt-6 mb-4">Forwards</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
        @foreach ($forwards as $player)
            <div class="border rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                <img src="{{ $player->image }}" alt="{{ $player->name }}" class="w-full h-96 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold mb-2">{{ $player->first_name }} {{ $player->last_name }}</h2>
                    <p class="text-gray-700 font-semibold">Age: {{ $player->age }}</p>
                    <p class="text-gray-700 font-semibold">Nationality: {{ $player->nationality }}</p>
                    <p class="text-gray-700 font-semibold">Foot: {{ $player->foot }}</p>
                    <p class="text-gray-700 font-semibold">Jersey: {{ $player->jersey_number }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('layouts.footer')
</body>

</html>
