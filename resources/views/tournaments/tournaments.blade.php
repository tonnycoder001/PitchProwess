@extends('layouts.nav')
@section('content')
    @include('layouts.include')

    <div class="container mx-auto pt-6 flex flex-col items-center">
        @foreach ($tournament as $tournament)
            <div class="w-full max-w-lg rounded overflow-hidden shadow-lg bg-white my-4">
                <div class="px-6 py-4">
                    <div class="font-bold text-2xl mb-2 text-center">{{ $tournament->tournament_name }}</div>
                    <div class="flex items-center justify-between mb-2 space-x-6">
                        <p class="text-gray-700 text-base font-bold">{{ $tournament->home_team }}</p>
                        <p class="text-gray-700 text-base bg-red-500 rounded-full p-2">{{ $tournament->time }}</p>
                        <p class="text-gray-700 text-base font-bold">{{ $tournament->away_team }}</p>
                    </div>
                    <div class="text-center pt-6">
                        <p class="text-gray-700 text-base"><strong>Date:</strong> {{ $tournament->date }}</p>
                        <p class="text-gray-700 text-base"><strong>Location:</strong> {{ $tournament->location }}</p>
                        <p class="text-gray-700 text-base"><strong>Results:</strong> {{ $tournament->results }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
