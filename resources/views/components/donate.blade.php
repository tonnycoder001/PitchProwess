<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@include('layouts.nav')

<body>
    <section class="pb-12 bg-gray-100 min-h-screen">
        <div class="pt-12">
            <div class="container sm:w-full md:w-3/4 lg:w-1/2 mx-auto px-4 py-16 rounded-lg bg-white shadow-md">
                <header class="bg-white shadow-md py-4 px-8 flex justify-between items-center sm:text-center">
                    <h1 class="text-2xl font-bold text-gray-800"><span class="text-orange-500">Don</span><span
                            class="text-green-500">ate</span></h1>
                    <a href="/" class="text-gray-600 hover:text-gray-800 hidden sm:block">Back to Homepage</a>
                </header>

                <main>
                    <section class="mb-4 mt-6">
                        <h2 class="text-4xl font-bold text-black mb-4 flex justify-center">Your
                            Support
                            Makes a Difference</h2>
                        <p class="text-gray-700 text-lg flex text-center">Your generous donation will help us
                            continue our mission to nuture young lives. Every contribution, big or small, gets us closer
                            to achieving our goals.</p>
                    </section>


                    <section class="mb-2 rounded-lg bg-white shadow-md p-4 text-center">
                        <h3 class="text-xl font-bold text-gray-800 ">Donation Options</h3>
                        <p class="text-gray-700 mb-2">We appreciate your support! You can donate through the following
                            methods:</p>
                        <ul class="list-disc pl-4">

                            <div class="">
                                <p>Donate using these number</p>
                                <h1><span class="text-green-500">Mpesa</span> ********** </h1>
                                <h1><span class="text-red-500">Airtel</span> **********</h1>
                            </div>
                        </ul>
                    </section>

                    <section class="mb-12">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 flex justify-center sm:text-left">Spread the
                            Word!</h3>
                        <p class="text-gray-700 justify-center flex sm:justify-left">Help us reach more people in need
                            by sharing this
                            donation page with your friends and family.</p>
            </div>
    </section>
    @include('layouts.footer')
