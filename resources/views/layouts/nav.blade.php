<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for the dropdown */
        .group:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>

<body class="pt-2">

    <div class="flex items-center mb-6 ml-12">
        @guest
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
            </svg>
            <div>
                <a href="/register" class="text-lg font-semibold">Sign up</a>
            </div>
        @endguest

        <div class="flex items-center space-x-4 ml-auto">
            <div class="flex items-center space-x-2">
                @auth
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <div>
                        <p class="text-black  mr-6 uppercase">{{ auth()->user()->name }}</p>
                    </div>
                    <form action="{{ route('logout') }}" method="post" class="inline">
                        @csrf
                        <button type="submit"
                            class="text-black p-2 bg-red-500 rounded-full hover:bg-red-700 mr-4">Logout</button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
    <nav class="py-4">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <span class="text-3xl font-bold">SOCCER<span class="text-xl">™</span></span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="/news" class="hover:underline">LATEST</a>
                <div class="relative group">
                    <a href="#" class="hover:underline">FIXTURES</a>
                    <div
                        class="absolute left-0 mt-2 w-48 bg-white text-gray-800 rounded-md shadow-lg hidden dropdown-menu">
                        <a href="/" class="block px-4 py-2 hover:bg-gray-100">LEAGUE</a>
                        <a href="/" class="block px-4 py-2 hover:bg-gray-100">TOURNAMENT</a>
                        <a href="/" class="block px-4 py-2 hover:bg-gray-100">FRIENDLIES</a>
                    </div>
                </div>
                <a href="#" class="hover:underline">RESULTS</a>
                <div class="relative group">
                    <a href="#" class="hover:underline">PLAYERS</a>
                    <div
                        class="absolute left-0 mt-2 w-48 bg-white text-gray-800 rounded-md shadow-lg hidden dropdown-menu">
                        <a href="/seniors" class="block px-4 py-2 hover:bg-gray-100">Seniors</a>
                        <a href="/women" class="block px-4 py-2 hover:bg-gray-100">Women</a>
                        <a href="/academyplayers" class="block px-4 py-2 hover:bg-gray-100">Academy</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>
@yield('content')

</html>
