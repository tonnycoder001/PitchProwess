@extends('layouts.nav')

@section('content')
    @include('layouts.all')
    {{-- <div class="container mx-auto pb-12 pt-6">
        @foreach ($playersByPosition as $position => $players)
            <h2 class="font-bold text-4xl pt-12 pb-8">{{ ucfirst($position) }}</h2>
            <hr class="mb-4 border-t-2 border-gray-300"> <!-- Horizontal line -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($players as $player)
                    <div class="relative bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                        onclick="window.location.href=''">
                        <img src="{{ $player->image }}" alt="{{ $player->name }}" class="w-full h-64 object-cover">
                        <div
                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-transparent to-transparent p-4">
                            <h2 class="text-white text-2xl font-bold">{{ $player->name }}</h2>
                            <p class="text-white">Age: {{ $player->age }}</p>
                            <p class="text-white">Foot: {{ $player->foot }}</p>
                            <p class="text-white">Position: {{ $player->position }}</p>
                            <p class="text-white">Nationality: {{ $player->nationality }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div> --}}

    <div class="grid grid-cols-3 gap-4">
        @foreach ($players as $player)
            <a href="" class="block relative border border-gray-200 rounded-lg overflow-hidden">
                <div class="relative h-64">
                    <img src="{{ $player->image }}" alt="{{ $player->first_name }} {{ $player->last_name }}"
                        class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-end p-4 text-white">
                        <p class="font-bold text-lg">{{ $player->first_name }} {{ $player->last_name }}</p>
                        <p>Age: {{ $player->age }}</p>
                        <p>Position: {{ $player->position }}</p>
                        <p>Foot: {{ $player->foot }}</p>
                        <p>Nationality: {{ $player->nationality }}</p>
                        <p>Jersey Number: {{ $player->jersey_number }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    @include('layouts.footer')
@endsection
