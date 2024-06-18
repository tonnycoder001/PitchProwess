@extends('layouts.nav')

@section('content')
    @include('layouts.all')
    <div class="container mx-auto pt-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($seniors as $senior)
                <div class="relative bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                    onclick="window.location.href=''{{ $senior->id }}'">
                    <img src="{{ $senior->image }}" alt="{{ $senior->name }}" class="w-full h-64 object-cover">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-transparent to-transparent p-4">
                        <h2 class="text-white text-2xl font-bold">{{ $senior->name }}</h2>
                        <p class="text-white">Age: {{ $senior->age }}</p>
                        <p class="text-white">Foot: {{ $senior->foot }}</p>
                        <p class="text-white">Position: {{ $senior->position }}</p>
                        <p class="text-white">Nationality: {{ $senior->nationality }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
