<header class="w-full px-2 py-1 flex  items-center justify-between  font-bold text-[#4b3735] border-b border-[#4b3735]/60">
    <div class="flex justify-center items-center gap-2 md:gap-5">
        <a href="/"><img src=" {{asset('img/logo_02.jpg')}}" alt="logo" class="w-12 h-12 rounded-full"></a>
        <a href="/gratitude/create" class="hover:text-[#c14875] transform duration-700 ease-in-out">Journal</a>
        <a href="/gratitude"class="hover:text-[#c14875] transform duration-700 ease-in-out">Gratitude</a>
    </div>
   @auth
   <a href="/logout" class="px-2 py-1 text-sm md:text-base text-[#fefbfc] bg-[#4b3735] hover:bg-[#c14875] rounded transform duration-700 ease-in-out">Logout</a>
    @else
    <div class="flex gap-2">
        <a href="/login" class="px-2 py-1 text-sm md:text-base text-[#fefbfc] bg-[#4b3735] hover:bg-[#c14875] rounded transform duration-700 ease-in-out">Login</a>
        <a href="/register" class="px-2 py-1 text-sm md:text-base text-[#fefbfc] bg-[#c14875] hover:bg-[#4b3735] rounded transform duration-700 ease-in-out">Register</a>
    </div>
   @endauth
    
</header>