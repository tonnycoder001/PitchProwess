{{-- <script src="https://cdn.tailwindcss.com"></script>
<div class="container">
    <h1 class="text-center">Team News</h1>
    @foreach ($women as $women)
        <div class="news-article">
            <h2> Name {{ $women->name }}</h2>
            <img src="{{ $women->image }}" alt="">
            <p> Age {{ $women->age }}</p>
            <p> Foot {{ $women->foot }}</p>
            <p> Position {{ $women->position }}</p>
            <p> Nationality {{ $women->nationality }}</p>

        </div>
    @endforeach --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

{{-- men --}}

<body class="bg-white p-12">
    <div class="container mx-auto flex justify-center">
        <div class="relative w-full max-w-7xl h-100 cursor-pointer overflow-hidden rounded-lg shadow-lg"
            onclick="window.location.href='profile-page.html'">
            <img src="images/download.jpeg" alt="Team Image" class="w-full h-full object-cover">
            <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 p-4">
                <h2 class="text-white text-3xl font-bold">MEN</h2>
                <a href="profile-page.html" class="text-blue-500 underline">VIEW PROFILES &rarr;</a>
            </div>
        </div>
    </div>

    {{-- women am academy  --}}
    <div class="pt-12">
        <div class="container mx-auto flex justify-center space-x-12">
            <div class="relative w-full max-w-7xl h-100 cursor-pointer overflow-hidden rounded-lg shadow-lg"
                onclick="window.location.href='profile-page.html'">
                <img src="images/woman.jpeg" alt="Team Image" class="w-full h-full object-cover">
                <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 p-4">
                    <h2 class="text-white text-3xl font-bold">WOMEN</h2>
                    <a href="profile-page.html" class="text-blue-500 underline">VIEW PROFILES &rarr;</a>
                </div>
            </div>
            <div class="relative w-full max-w-7xl h-100 cursor-pointer overflow-hidden rounded-lg shadow-lg"
                onclick="window.location.href='profile-page.html'">
                <img src="images/academy.jpeg" alt="Team Image" class="w-full h-full object-cover">
                <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 p-4">
                    <h2 class="text-white text-3xl font-bold">THE ACADEMY</h2>
                    <a href="profile-page.html" class="text-blue-500 underline">VIEW PROFILES &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
