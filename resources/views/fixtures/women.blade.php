<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Women</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .background-darken {
            filter: brightness(80%);
        }
    </style>
</head>

<body>
    <div class="hero min-h-screen background-darken" style="background-image: url('images/women.jpg');">
        @include('layouts.nav')
        <div class="border-t border-gray-800 "></div>
        <nav class="py-4">
            <div class="container mx-auto flex items-center justify-between">
                <div class="flex items-center">
                </div>
                <div class="flex-1 flex justify-center">
                    <nav class=" p-4">
                        <div class="container mx-auto flex justify-center items-center">
                            <ul class="flex space-x-4">
                                <a href="/"
                                    class="block px-4 py-2 text-sm text-white hover:bg-gray-100 hidden md:flex">Home</a>
                                <a href="{{ route('fixtures.women_league', ['team' => 'women']) }}"
                                    class="block px-4 py-2 text-sm text-white hover:bg-gray-100" role="menuitem">Women's
                                    League</a>
                                <a href="{{ route('fixtures.women_tournament', ['team' => 'women']) }}"
                                    class="block px-4 py-2 text-sm text-white hover:bg-gray-100" role="menuitem">women's
                                    Tournament</a>
                                <a href="{{ route('fixtures.women_friendly', ['team' => 'women']) }}"
                                    class="block px-4 py-2 text-sm text-white hover:bg-gray-100" role="menuitem">women's
                                    Friendly</a>
                            </ul>
                        </div>
                    </nav>
                </div>

            </div>
        </nav>


        <div class="px-4 mx-auto max-w-7xl flex items-center justify-center min-h-screen">
            <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
                <h1
                    class="mb-8 text-4xl font-bold leading-none tracking-normal text-gray-900 md:text-6xl  md:tracking-tight animate-bounce ">
                    <span class="text-white">Welcome</span> <span
                        class="block w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-green-400 to-purple-500 lg:inline">to
                        pneumatika</span> <span class="text-white">Women's team fixtures.</span>
                </h1>
                <p class="px-0 mb-0 text-lg text-white  md:text-xl lg:px-24">
                    It's a community dedicated to nurturing young people's talents while helping them discover their
                    purpose in life.
                </p>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>
