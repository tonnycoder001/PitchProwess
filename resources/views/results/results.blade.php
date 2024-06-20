@extends('layouts.nav')

@section('content')
    @include('layouts.pages')

    <div class="container mx-auto pt-6 flex flex-col items-center">
        @foreach ($result as $result)
            <div class="w-full max-w-lg rounded overflow-hidden shadow-lg bg-white my-4">
                <div class="px-6 py-4">
                    <div class="flex items-center justify-between mb-2 space-x-6">
                        <p class="text-gray-700 text-base font-bold">{{ $result->home_team }}</p>
                        <p class="text-gray-700 text-base bg-red-500 rounded-full p-2">{{ $result->results }}</p>
                        <p class="text-gray-700 text-base font-bold">{{ $result->away_team }}</p>
                    </div>
                    <div class="text-center pt-6">
                        <p class="text-gray-700 text-base"><strong>Date:</strong> {{ $result->date }}</p>
                        <p class="text-gray-700 text-base"><strong>Location:</strong> {{ $result->location }}</p>
                        <p class="text-gray-700 text-base"><strong></strong> {{ $result->time }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @include('.footer')
@endsection
