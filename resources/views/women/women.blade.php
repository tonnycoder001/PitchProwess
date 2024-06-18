{{-- <script src="https://cdn.tailwindcss.com"></script>
<div class="container">
    <h1 class="text-center">Team News</h1>
    @foreach ($women as $women)
        <h2> Name {{ $women->name }}</h2>
        <img src="{{ $women->image }}" alt="">
        <p> Age {{ $women->age }}</p>
        <p> Foot {{ $women->foot }}</p>
        <p> Position {{ $women->position }}</p>
        <p> Nationality {{ $women->nationality }}</p>
    @endforeach
</div> --}}


@extends('layouts.nav')

@section('content')
    @include('layouts.all')
    <div class="container mx-auto pt-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($women as $women)
                <div class="relative bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                    onclick="window.location.href='/senior/{{ $women->id }}'">
                    <img src="{{ $women->image }}" alt="{{ $women->name }}" class="w-full h-64 object-cover">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black via-transparent to-transparent p-4">
                        <h2 class="text-white text-2xl font-bold">{{ $women->name }}</h2>
                        <p class="text-white">Age: {{ $women->age }}</p>
                        <p class="text-white">Foot: {{ $women->foot }}</p>
                        <p class="text-white">Position: {{ $women->position }}</p>
                        <p class="text-white">Nationality: {{ $women->nationality }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
