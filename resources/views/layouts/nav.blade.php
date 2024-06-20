<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="pt-6">

    <div class="flex items-center mb-6 ml-12">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-6 w-6 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
        </svg>
        <div>
            <a href="/register" class="text-lg font-semibold">Sign up</a>
        </div>
    </div>

    <nav class="bg-red-800 p-8">
        <div class="container mx-auto flex ">
            <ul class="flex space-x-4">
                <li><a href="/fixtures" class="text-white hover:text-gray-400">FIXTURES & RESULTS</a></li>
                <li><a href="/players" class="text-white hover:text-gray-400">PLAYERS</a></li>
                <li><a href="/news" class="text-white hover:text-gray-400">NEWS</a></li>
                <li><a href="/tournaments" class="text-white hover:text-gray-400">TOURNAMENTS</a></li>
            </ul>
        </div>
    </nav>
</body>
@yield('content')

</html>
