<script src="https://cdn.tailwindcss.com"></script>



<form action="" method="post" class="space-y-4">
    @csrf


    <div class="flex flex-col">
        <label for="name" class="text-sm mb-2">Name</label>
        <input type="text" id="name" name="name"
            class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
            value="{{ old('name') }}" placeholder="name">

        {{-- error message --}}
        @error('last_name')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="flex flex-col">
        <label for="email" class="text-sm mb-2">Email</label>
        <input type="email" id="email" name="email"
            class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
            class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"
            value="{{ old('email') }}" placeholder="Email">

        {{-- error message --}}
        @error('email')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="flex flex-col">
        <label for="password" class="text-sm mb-2">Password</label>
        <input type="password" id="password" name="password"
            class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
            placeholder="Password">
        {{-- error message --}}
        @error('password')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="password_confirmation" class="text-sm mb-2">Password Again</label>
        <input type="password" id="password_confirmation" name="password_confirmation"
            class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
            placeholder="Password">
    </div>
    <button type="submit"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700">Register</button>
</form>
<p>Already have an account? <a href="/login" class="text-blue-500 hover:text-blue-700">Login</a></p>
</div>
