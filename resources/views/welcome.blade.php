<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .background-darken {
            filter: brightness(80%);
        }
    </style>
</head>

<body>
    <div class="hero min-h-screen background-darken" style="background-image: url('images/bg_3.jpg');">
        <nav class="py-4 ">
            <div class="container mx-auto flex items-center justify-between ">
                <div class="flex items-center">
                    <span class="text-3xl font-bold text-orange-800 hidden sm:block">PNEUMATIKA<span
                            class="text-xl">™</span></span>
                </div>
                <div class="flex-1 flex justify-center">
                    <div class=" md:flex space-x-8 text-center sm:text-left">
                        <a href="/news" class="hover:underline text-orange-800  hidden md:flex">Latest</a>
                        <div class="relative group">
                            <a href="#" class="hover:underline text-orange-800 ">Fixtures</a>
                            <div
                                class="absolute left-0 mt-2 w-48 bg-white text-orange-800 rounded-md shadow-lg hidden group-hover:block dropdown-menu">
                                <a href="/fixtures.men" class="block px-4 py-2 hover:bg-gray-100">Men</a>
                                <a href="/fixtures.women" class="block px-4 py-2 hover:bg-gray-100">Women</a>
                                <a href="/fixtures.academy" class="block px-4 py-2 hover:bg-gray-100">Academy</a>
                            </div>
                        </div>
                        <a href="#" class="hover:underline text-orange-800  hidden md:flex">Results</a>
                        <div class="relative group">
                            <a href="#" class="hover:underline text-orange-800  hidden md:flex">Players</a>
                            <div
                                class="absolute left-0 mt-2 w-48 bg-white text-orange-800 rounded-md shadow-lg hidden group-hover:block dropdown-menu">
                                <a href="/seniors" class="block px-4 py-2 hover:bg-gray-100">Men</a>
                                <a href="/women" class="block px-4 py-2 hover:bg-gray-100">Women</a>
                                <a href="/academyplayers" class="block px-4 py-2 hover:bg-gray-100">Academy</a>
                            </div>
                        </div>
                        <a href="/components/donate" class="hover:underline text-orange-800">Donate</a>


                    </div>
                </div>
                <div class="flex items-center ">
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
                    @auth
                        <div class="flex items-center space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <div>
                                <p class="text-black mr-6 uppercase">{{ auth()->user()->name }}</p>
                            </div>
                            <form action="{{ route('logout') }}" method="post" class="inline">
                                @csrf
                                <button type="submit"
                                    class="text-black p-2 bg-red-500 rounded-lg hover:bg-red-700 mr-4">Logout</button>
                            </form>
                        </div>
                    @endauth
                </div>
            </div>

        </nav>

        <div class="flex items-center justify-center min-h-screen ">
            <div
                class="text-black max-w-2xl text-center p-6 bg-opacity-50 bg-white rounded-lg sm:w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-4xl font-bold text-orange-800">Pneumatika FC: Where Passion Meets the Beautiful Game
                </h1>
                <p class="mt-4">
                    Football is more than just a sport; it's a language spoken through the swift movements of the
                    players,
                    the roar of the crowd, and the thrill of every goal. At Pneumatika FC, this language is spoken
                    fluently,
                    passionately, and with an unwavering dedication to the beautiful game.
                </p>
                <p class="mt-4">
                    Pneumatika FC isn't just a football club; it's a haven for those who eat, sleep, and breathe
                    football.
                    From the moment you step onto the field, you can feel the electric energy and the collective
                    heartbeat
                    of a community that lives for the sport. Each player, whether a seasoned veteran or an aspiring
                    talent,
                    shares a common dream: to play football with heart, skill, and integrity.
                </p>
                <p class="mt-4">
                    The club is a melting pot of diverse talents, bringing together individuals from all walks of life
                    who
                    are united by their love for football. The camaraderie among the players is palpable, creating an
                    environment where teamwork thrives, and every match is a testament to their hard work and
                    dedication.
                </p>
            </div>
        </div>
    </div>
    <section class="bg-red-800 flex items-center justify-center pt-4 pb-4 space-x-4">
        <style>
            @keyframes slide {
                0% {
                    transform: translateX(100%);
                }

                50% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-100%);
                }
            }

            .slide-infinite {
                animation: slide 5s linear infinite;
            }
        </style>
        </head>


        <div class="relative w-full max-w-lg">
            <div class="news-card bg-white bg-cover bg-center rounded-lg shadow-lg overflow-hidden slide-infinite"
                style="background-image: url('images/bg_1.jpg');">
                <div class="p-4 bg-opacity-50 bg-black text-white">
                    <h2 class="text-2xl font-semibold mb-2">Stay Updated!</h2>
                    <p class="text-gray-200 mb-4">Read our latest news on the news page. Stay informed with the latest
                        updates and announcements.</p>
                    <a href="/news" class="text-blue-300 hover:underline">Go to News Page</a>
                </div>
            </div>
        </div>
        <div class="relative w-full max-w-lg">
            <div class="news-card bg-white bg-cover bg-center rounded-lg shadow-lg overflow-hidden slide-infinite"
                style="background-image: url('images/bg_1.jpg');">
                <div class="p-4 bg-opacity-50 bg-black text-white">
                    <h2 class="text-2xl font-semibold mb-2">Follow us on our social media platforms!</h2>
                    <p class="text-gray-200 mb-4">Share our profile on social media.</p>
                    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
                        <div class="flex space-x-6">
                            <a href="https://www.instagram.com" target="_blank" class="text-white hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.5 3h9a4.5 4.5 0 0 1 4.5 4.5v9a4.5 4.5 0 0 1-4.5 4.5h-9A4.5 4.5 0 0 1 3 16.5v-9A4.5 4.5 0 0 1 7.5 3ZM16.5 2.25A1.125 1.125 0 1 1 15.375 3 1.125 1.125 0 0 1 16.5 2.25ZM12 7.5a4.5 4.5 0 1 1-4.5 4.5A4.5 4.5 0 0 1 12 7.5Z" />
                                </svg>
                            </a>
                            <a href="https://www.facebook.com" target="_blank"
                                class="text-white hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M18 2.25h-12A3.75 3.75 0 0 0 2.25 6v12A3.75 3.75 0 0 0 6 21.75h6.75v-6h-1.5v-2.25h1.5v-1.25c0-1.96 1.22-3.25 3-3.25a15.16 15.16 0 0 1 1.5.07v1.68h-1c-1 0-1.25.5-1.25 1.25v1.5h2.5l-.5 2.25h-2v6H18A3.75 3.75 0 0 0 21.75 18V6A3.75 3.75 0 0 0 18 2.25Z" />
                                </svg>
                            </a>
                            <a href="https://www.whatsapp.com" target="_blank"
                                class="text-white hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 2.25A9.75 9.75 0 0 0 2.25 12c0 1.95.57 3.75 1.57 5.29L2.25 21.75 6.71 20.2A9.75 9.75 0 1 0 12 2.25Zm-1.07 13.93-2.39-.99a6.75 6.75 0 1 1 7.1-1.41l-1.01-2.38a.75.75 0 0 0-.68-.44h-1.5a.75.75 0 0 0-.75.75v3.75a.75.75 0 0 0 .75.75H14a.75.75 0 0 0 .75-.75v-1.5a.75.75 0 0 0-.44-.68l-2.39-1.01Z" />
                                </svg>
                            </a>
                            <a href="https://www.twitter.com" target="_blank" class="text-white hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 4.5a8.4 8.4 0 0 1-2.38.66A4.13 4.13 0 0 0 21.15 3a8.42 8.42 0 0 1-2.64 1 4.13 4.13 0 0 0-7.11 3.76 11.67 11.67 0 0 1-8.47-4.3 4.12 4.12 0 0 0 1.27 5.5 4.08 4.08 0 0 1-1.87-.52v.05a4.13 4.13 0 0 0 3.31 4.04 4.18 4.18 0 0 1-1.86.07 4.13 4.13 0 0 0 3.85 2.86A8.27 8.27 0 0 1 2.25 18c-.41 0-.82-.02-1.23-.07A11.63 11.63 0 0 0 12 20.25c7.68 0 11.88-6.36 11.88-11.88 0-.18 0-.35-.01-.52A8.45 8.45 0 0 0 21.75 4.5Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script src="https://cdn.tailwindcss.com"></script>
    <footer class="bg-gray-800 py-6 mt-auto pt-12">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="flex space-x-6">
                <a href="https://www.instagram.com" target="_blank" class="text-white hover:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 3h9a4.5 4.5 0 0 1 4.5 4.5v9a4.5 4.5 0 0 1-4.5 4.5h-9A4.5 4.5 0 0 1 3 16.5v-9A4.5 4.5 0 0 1 7.5 3ZM16.5 2.25A1.125 1.125 0 1 1 15.375 3 1.125 1.125 0 0 1 16.5 2.25ZM12 7.5a4.5 4.5 0 1 1-4.5 4.5A4.5 4.5 0 0 1 12 7.5Z" />
                    </svg>
                </a>
                <a href="https://www.facebook.com" target="_blank" class="text-white hover:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 2.25h-12A3.75 3.75 0 0 0 2.25 6v12A3.75 3.75 0 0 0 6 21.75h6.75v-6h-1.5v-2.25h1.5v-1.25c0-1.96 1.22-3.25 3-3.25a15.16 15.16 0 0 1 1.5.07v1.68h-1c-1 0-1.25.5-1.25 1.25v1.5h2.5l-.5 2.25h-2v6H18A3.75 3.75 0 0 0 21.75 18V6A3.75 3.75 0 0 0 18 2.25Z" />
                    </svg>
                </a>
                <a href="https://www.whatsapp.com" target="_blank" class="text-white hover:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 2.25A9.75 9.75 0 0 0 2.25 12c0 1.95.57 3.75 1.57 5.29L2.25 21.75 6.71 20.2A9.75 9.75 0 1 0 12 2.25Zm-1.07 13.93-2.39-.99a6.75 6.75 0 1 1 7.1-1.41l-1.01-2.38a.75.75 0 0 0-.68-.44h-1.5a.75.75 0 0 0-.75.75v3.75a.75.75 0 0 0 .75.75H14a.75.75 0 0 0 .75-.75v-1.5a.75.75 0 0 0-.44-.68l-2.39-1.01Z" />
                    </svg>
                </a>
                <a href="https://www.twitter.com" target="_blank" class="text-white hover:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 4.5a8.4 8.4 0 0 1-2.38.66A4.13 4.13 0 0 0 21.15 3a8.42 8.42 0 0 1-2.64 1 4.13 4.13 0 0 0-7.11 3.76 11.67 11.67 0 0 1-8.47-4.3 4.12 4.12 0 0 0 1.27 5.5 4.08 4.08 0 0 1-1.87-.52v.05a4.13 4.13 0 0 0 3.31 4.04 4.18 4.18 0 0 1-1.86.07 4.13 4.13 0 0 0 3.85 2.86A8.27 8.27 0 0 1 2.25 18c-.41 0-.82-.02-1.23-.07A11.63 11.63 0 0 0 12 20.25c7.68 0 11.88-6.36 11.88-11.88 0-.18 0-.35-.01-.52A8.45 8.45 0 0 0 21.75 4.5Z" />
                    </svg>
                </a>
            </div>
            @guest
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="/login"
                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">Login</a>
                    <a href="/register"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Register</a>
                </div>
            @endguest

        </div>
    </footer>
    <footer class="bg-gray-900 text-white py-4 mt-auto">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="flex flex-wrap justify-center md:justify-start space-x-4 text-sm mb-2 md:mb-0">
                <a href="/components/about_us" class="hover:text-gray-400">About Us</a>
                <a href="/contacts" class="hover:text-gray-400">Contact Us</a>
                <a href="/privacy_policy" class="hover:text-gray-400">Privacy & Policy</a>
                <a href="/terms_of_use" class="hover:text-gray-400">Terms Of Use</a>
                <a href="/components/donate" class="hover:text-gray-400">Donate</a>


            </div>
            <div class="text-sm text-gray-500">
                &copy; 2024 Pneumatika FC.
            </div>
        </div>
    </footer>
</body>

</html>
