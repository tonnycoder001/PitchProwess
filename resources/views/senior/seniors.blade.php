<script src="https://cdn.tailwindcss.com"></script>
@include('layouts.nav')



<div class="border-t border-gray-800 my-6"></div>

<div class="flex-1 flex justify-center">
    <div class=" md:flex space-x-8">
        <div class="relative group">
            <a href="/seniors" class="hover:underline text-black hidden md:flex">Men's Team</a>
        </div>
        <a href="/women" class="hover:underline text-black">Women's Team</a>
        <div class="relative group">
            <a href="/academyplayers" class="hover:underline text-black">The Academy</a>
        </div>


    </div>
</div>
<div class="container mx-auto px-4 pb-12 pt-12">

    <h1 class="text-2xl font-bold text-center my-6">Men's Team</h1>

    <h2 class="text-xl font-semibold mt-6 mb-4">Goalkeepers</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($goalkeepers as $player)
            <div class="relative bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ $player->image }}');">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                </div>
                <div class="relative p-6">
                    <h5 class="text-xl font-bold mb-2 text-white">{{ $player->first_name }} {{ $player->last_name }}
                    </h5>
                    <p class="text-gray-200 mb-2">Age: {{ $player->age }}</p>
                    <p class="text-gray-200 mb-2">Nationality: {{ $player->nationality }}</p>
                    <p class="text-gray-200 mb-2">Foot: {{ $player->foot }}</p>
                    <p class="text-gray-200 mb-2">Jersey Number: {{ $player->jersey_number }}</p>
                    <p class="text-gray-200 mb-2">Position: {{ $player->position }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="border-t border-gray-300 my-6"></div>

    <h2 class="text-xl font-semibold mt-6 mb-4">Defenders</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($defenders as $player)
            <div class="relative bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ $player->image }}');">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                </div>
                <div class="relative p-6">
                    <h5 class="text-xl font-bold mb-2 text-white">{{ $player->first_name }} {{ $player->last_name }}
                    </h5>
                    <p class="text-gray-200 mb-2">Age: {{ $player->age }}</p>
                    <p class="text-gray-200 mb-2">Nationality: {{ $player->nationality }}</p>
                    <p class="text-gray-200 mb-2">Foot: {{ $player->foot }}</p>
                    <p class="text-gray-200 mb-2">Jersey Number: {{ $player->jersey_number }}</p>
                    <p class="text-gray-200 mb-2">Position: {{ $player->position }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="border-t border-gray-300 my-6"></div>

    <h2 class="text-xl font-semibold mt-6 mb-4">Midfielders</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($midfielders as $player)
            <div class="relative bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('{{ $player->image }}');">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                </div>
                <div class="relative p-6">
                    <h5 class="text-xl font-bold mb-2 text-white">{{ $player->first_name }} {{ $player->last_name }}
                    </h5>
                    <p class="text-gray-200 mb-2">Age: {{ $player->age }}</p>
                    <p class="text-gray-200 mb-2">Nationality: {{ $player->nationality }}</p>
                    <p class="text-gray-200 mb-2">Foot: {{ $player->foot }}</p>
                    <p class="text-gray-200 mb-2">Jersey Number: {{ $player->jersey_number }}</p>
                    <p class="text-gray-200 mb-2">Position: {{ $player->position }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="border-t border-gray-300 my-6"></div>

    <h2 class="text-xl font-semibold mt-6 mb-4">Forwards</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($forwards as $player)
            <div class="relative bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('{{ $player->image }}');">
                    <div class="absolute inset-0 bg-black opacity-50"></div>
                </div>
                <div class="relative p-6">
                    <h5 class="text-xl font-bold mb-2 text-white">{{ $player->first_name }} {{ $player->last_name }}
                    </h5>
                    <p class="text-gray-200 mb-2">Age: {{ $player->age }}</p>
                    <p class="text-gray-200 mb-2">Nationality: {{ $player->nationality }}</p>
                    <p class="text-gray-200 mb-2">Foot: {{ $player->foot }}</p>
                    <p class="text-gray-200 mb-2">Jersey Number: {{ $player->jersey_number }}</p>
                    <p class="text-gray-200 mb-2">Position: {{ $player->position }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('layouts.footer')
</body>

</html>
