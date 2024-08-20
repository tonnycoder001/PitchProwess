@vite('resources/css/app.css')
<footer class="bg-gray-800 py-6 mt-auto pt-12">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
        <div class="flex space-x-6">
            <a href="https://www.instagram.com/pneumatika_fc/?hl=en" target="_blank"
                class="text-white hover:text-gray-400">
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
            <a href="https://whatsapp.com/channel/0029VaPpgvs1XquRV5X1ae1t" target="_blank"
                class="text-white hover:text-gray-400">
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
            <a href="/components/contact_us" class="hover:text-gray-400">Contact Us</a>
            <a href="/components/donate" class="hover:text-gray-400">Donate</a>

        </div>
        <div class="text-sm text-gray-500">
            &copy; 2024 Pneumatika FC.
        </div>
    </div>
</footer>
