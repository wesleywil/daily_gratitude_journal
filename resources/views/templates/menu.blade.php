<header class="w-full px-2 py-1 flex  items-center justify-between  font-bold bg-black text-white">
    <div class="flex justify-center items-center gap-5">
        <a href="/"><img src="https://dummyimage.com/50x50" alt="logo" class="rounded-full"></a>
        <a href="/" class="hover:text-green-400 transform duration-700 ease-in-out">Journal</a>
        <a href="/gratitude"class="hover:text-green-400 transform duration-700 ease-in-out">Gratitude</a>
    </div>
   @auth
   <a href="/logout" class="px-2 py-1 text-sm md:text-base text-black bg-blue-400 hover:bg-blue-200 rounded transform duration-700 ease-in-out">Logout</a>
    @else
    <div class="flex gap-2">
        <a href="/login" class="px-2 py-1 text-sm md:text-base text-black bg-blue-400 hover:bg-blue-200 rounded transform duration-700 ease-in-out">Login</a>
        <a href="/register" class="px-2 py-1 text-sm md:text-base text-black bg-yellow-400 hover:bg-yellow-200 rounded transform duration-700 ease-in-out">Register</a>
    </div>
   @endauth
    
</header>