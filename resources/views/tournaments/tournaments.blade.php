@extends('layouts.nav')
@section('content')
    @include('layouts.include')

    <div class="container mx-auto pt-6">
        @foreach ($tournament as $tournament)
            <p class="text-black">Age: {{ $tournament->home_team }}</p>
            <p class="text-black">Foot: {{ $tournament->away_team }}</p>
            <p class="text-black">Position: {{ $tournament->date }}</p>
            <p class="text-black">Nationality: {{ $tournament->time }}</p>
        @endforeach
    </div>
@endsection
