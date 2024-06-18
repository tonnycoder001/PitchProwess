@extends('layouts.nav')
@section('content')
    {{-- Men --}}
    <div class="container mx-auto flex justify-center p-12">
        <div class="relative w-full max-w-7xl h-100 cursor-pointer overflow-hidden rounded-lg shadow-lg"
            onclick="window.location.href='/seniors'">
            <img src="images/download.jpeg" alt="Team Image" class="w-full h-full object-cover">
            <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 p-4">
                <h2 class="text-white text-3xl font-bold">MEN</h2>
                <a href="/seniors" class="text-blue-500 underline">VIEW PROFILES &rarr;</a>
            </div>
        </div>
    </div>

    {{-- women --}}
    <div class="pt-12">
        <div class="container mx-auto flex justify-center space-x-12">
            <div class="relative w-full max-w-7xl h-100 cursor-pointer overflow-hidden rounded-lg shadow-lg"
                onclick="window.location.href='/women'">
                <img src="images/woman.jpeg" alt="Team Image" class="w-full h-full object-cover">
                <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 p-4">
                    <h2 class="text-white text-3xl font-bold">WOMEN</h2>
                    <a href="/women" class="text-blue-500 underline">VIEW PROFILES &rarr;</a>
                </div>
            </div>

            {{-- Academy --}}
            <div class="relative w-full max-w-7xl h-100 cursor-pointer overflow-hidden rounded-lg shadow-lg"
                onclick="window.location.href='/academyplayers'">
                <img src="images/academy.jpeg" alt="Team Image" class="w-full h-full object-cover">
                <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 p-4">
                    <h2 class="text-white text-3xl font-bold">THE ACADEMY</h2>
                    <a href="/academyplayers" class="text-blue-500 underline">VIEW PROFILES &rarr;</a>
                </div>
            </div>
        </div>
    </div>
@endsection
