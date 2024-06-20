<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
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

    <nav class="bg-red-800 p-8">
        <div class="container mx-auto flex ">
            <ul class="flex space-x-4">
                <li><a href="/fixtures" class="text-white hover:text-gray-400">FIXTURES & RESULTS</a></li>
                <li><a href="/players" class="text-white hover:text-gray-400">PLAYERS</a></li>
                <li><a href="/news" class="text-white hover:text-gray-400">LATEST</a></li>
                <li><a href="/" class="text-white hover:text-gray-400">LEAGUE</a></li>
                <li><a href="/" class="text-white hover:text-gray-400">FRIENDLY</a></li>
                <li><a href="/tournaments" class="text-white hover:text-gray-400">TOURNAMENTS</a></li>
            </ul>

        </div>
    </nav>
    @yield('content')

</html>
