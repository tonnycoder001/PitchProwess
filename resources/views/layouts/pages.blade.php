<style>
    /* Custom dropdown arrow */
    .dropdown:after {
        content: '▼';
        font-size: 0.75rem;
        color: white;
        margin-left: 0.5rem;
    }

    .dropdown:hover:after {
        color: gray;
    }
</style>
<div class="pt-4">
    <nav class=" bg-gray-800 p-6">
        <div class="container mx-auto flex ">
            <ul class="flex space-x-4">
                <li class="relative group">
                    <a href="#" class="dropdown text-white hover:text-gray-400 font-bold text-2xl">Men</a>
                    <ul
                        class="absolute left-0 hidden mt-2 space-y-2 bg-white text-black p-2 rounded-md shadow-lg group-hover:block">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Women</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Academy</a></li>
                    </ul>
                </li>
            </ul>
            <div class="container flex justify-center">
                <ul class="flex space-x-4">
                    <li><a href="/fixtures" class="text-white hover:text-gray-400">Fixtures</a></li>
                    <li><a href="/results" class="text-white hover:text-gray-400">Results</a></li>
                    <li><a href="#" class="text-white hover:text-gray-400">Tables</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
