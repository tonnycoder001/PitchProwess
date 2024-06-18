<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="pt-12">
    <nav class="bg-red-800 p-8">
        <div class="container mx-auto flex ">
            <ul class="flex space-x-4">
                <li><a href="/fixtures" class="text-white hover:text-gray-400">FIXTURES</a></li>
                <li><a href="/players" class="text-white hover:text-gray-400">PLAYERS</a></li>
                <li><a href="/news" class="text-white hover:text-gray-400">NEWS</a></li>
            </ul>
        </div>
    </nav>
</body>
@yield('content')

</html>
