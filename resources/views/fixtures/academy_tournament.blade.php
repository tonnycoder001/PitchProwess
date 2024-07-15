<script src="https://cdn.tailwindcss.com"></script>

<nav class=" p-4">
    <div class="container mx-auto flex justify-center items-center">
        <ul class="flex space-x-4">
            <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-800">Home</a>
            <a href="/fixtures.men" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-800">Men</a>
            <a href="/fixtures.women" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-800">Women</a>

        </ul>
    </div>
</nav>
<div class="border-t border-gray-300"></div>

<div class="flex-1 flex justify-center">
    <nav class=" p-4">
        <div class="container mx-auto flex justify-center items-center">
            <ul class="flex space-x-4">
                <a href="{{ route('fixtures.academy_league', ['team' => 'academy']) }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Academy League</a>
                <a href="{{ route('fixtures.academy_tournament', ['team' => 'academy']) }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Academy
                    Tournament</a>
                <a href="{{ route('fixtures.academy_friendly', ['team' => 'academy']) }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Academy Friendly</a>
            </ul>
        </div>
    </nav>
</div>
<div class="border-t border-gray-300"></div>

<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold text-center my-6">{{ ucfirst($team) }} Tournaments Fixtures</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($fixtures as $fixture)
            <div class="relative bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('{{ $fixture->image }}');">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                </div>
                <div class="relative p-6">
                    <h5 class="text-xl font-bold mb-2 text-white">{{ $fixture->home_team }} vs {{ $fixture->away_team }}
                    </h5>
                    <p class="text-gray-200 mb-2">Date: {{ $fixture->date }}</p>
                    <p class="text-gray-200 mb-2">Location: {{ $fixture->location }}</p>
                    <p class="text-gray-200 mb-2">Time: {{ $fixture->time }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
