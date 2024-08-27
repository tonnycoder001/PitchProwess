@vite('resources/css/app.css')
<div class="container mx-auto max-w-sm px-4 py-8">
    <h1 class="text-2xl font-bold text-center mb-4">Login</h1>

    @if (session('status'))
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-centre">
            {{ session('status') }}
        </div>
    @endif
    <form action="" method="post" class="space-y-4">
        @csrf
        <div class="flex flex-col">
            <label for="email" class="text-sm mb-2">Email</label>
            <input type="email" id="email" name="email"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="password" class="text-sm mb-2">Password</label>
            <input type="password" id="password" name="password"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500">
        </div>

        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700">Login</button>
    </form>
    <p>Don't have an account? <a href="/register" class="text-blue-500 hover:text-blue-700">Register</a> </p>


</div>
