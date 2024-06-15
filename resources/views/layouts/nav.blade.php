<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Nav</title>
</head>

<body class="pt-12">
    <nav class="bg-gray-800 text-white flex  px-4 py-2 shadow-md">
        <div class="flex items-center">
        </div>
        <div class="flex item-center">
            <a href=""
                class="px-3 py-2 rounded-md hover:text-gray-400 font-medium text-white current">FIXTURES</a>
            <a href="/players" class="px-3 py-2 rounded-md hover:text-gray-400 font-medium text-white">PLAYERS</a>
            <a href="#" class="px-3 py-2 rounded-md hover:text-gray-400 font-medium text-white">NEWS</a>
            <a href="#" class="px-3 py-2 rounded-md hover:text-gray-400 font-medium text-white">Contact</a>
        </div>


    </nav>
</body>
@yield('content')

</html>
