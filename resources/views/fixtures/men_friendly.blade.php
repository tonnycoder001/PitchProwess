<script src="https://cdn.tailwindcss.com"></script>


@include('layouts.nav')

<div class="border-t border-gray-300"></div>


<nav class=" p-4">
    <div class="container mx-auto flex justify-center items-center">
        <ul class="flex space-x-4">
            <a href="{{ route('fixtures.men_league', ['team' => 'men']) }}"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Men's League</a>
            <a href="{{ route('fixtures.men_tournament', ['team' => 'men']) }}"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Men's Tournament</a>
            <a href="{{ route('fixtures.men_friendly', ['team' => 'men']) }}"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Men's Friendly</a>
        </ul>
    </div>
</nav>

<div class="container mx-auto px-4 pb-12">
    <h1 class="text-2xl font-bold text-center my-6">{{ ucfirst($team) }} Friendly Fixtures</h1>
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
@include('layouts.footer')
