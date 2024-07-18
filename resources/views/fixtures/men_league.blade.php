<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ ucfirst($team) }} Fixtures</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen">
    @include('layouts.nav')

    <div class="border-t border-gray-300"></div>

    <nav class="p-4">
        <div class="container mx-auto flex justify-center items-center">
            <ul class="flex space-x-4">
                <a href="{{ route('fixtures.men_league', ['team' => 'men']) }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hidden md:flex" role="menuitem">Men's
                    League</a>
                <a href="{{ route('fixtures.men_tournament', ['team' => 'men']) }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Men's Tournament</a>
                <a href="{{ route('fixtures.men_friendly', ['team' => 'men']) }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Men's Friendly</a>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto px-4 pb-12">
        <h1 class="text-2xl font-bold text-center my-6">{{ ucfirst($team) }} League Fixtures</h1>
        <div class="flex item-center justify-center">
            <div class="w-full md:w-1/2 lg:w-1/2">
                <div class="grid grid-cols-1 gap-8">
                    @foreach ($fixtures as $fixture)
                        <div class="relative bg-white shadow-lg rounded-lg overflow-hidden p-8">
                            <div class="flex justify-between items-center mb-1  ">
                                <p class="text-gray-600 text-sm">{{ $fixture->date }} | Friendly</p>
                            </div>
                            <div class="flex justify-between items-center">
                                <h5 class="text-base font-bold">{{ $fixture->home_team }}</h5>
                                <p class="text-gray-600 text-xs">{{ $fixture->time }}</p>
                                <h5 class="text-base font-bold">{{ $fixture->away_team }}</h5>
                            </div>
                            <p class="text-gray-600 text-xs mt-1">{{ $fixture->location }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="hidden md:block md:w-1/2 lg:w-1/3 pl-12">
                <div class="p-6 bg-black text-white rounded-lg shadow-lg">
                    <h2 class="text-xl font-bold mb-2">Add Fixtures to Calendar</h2>
                    <p class="mb-4">You can now add fixtures to your calendar so you never miss any of our matches.
                    </p>
                    <button class="bg-red-600 text-white py-3 px-6 rounded-lg hover:bg-red-700">ADD TO CALENDAR</button>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>
