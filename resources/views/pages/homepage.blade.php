<main class="min-h-[85vh] w-full md:w-2/3 xl:w-2/4 flex flex-col items-center justify-center text-[#4b3735]" >
    <img src=" {{asset('img/logo_02.jpg')}}" alt="logo" class="w-1/5 rounded-full">
    <h1 class="text-3xl md:text-5xl font-bold text-center">Daily Journal Gratitude</h1>
    <h2 class=" xl:w-2/4 mt-2 px-2 md:text-2xl text-center font-semibold">Embrace daily gratitude and transform your life one thankful moment at a time.</h2>
    @auth
        <a href="/gratitude/create" class="w-40 mt-2 px-2 py-1 text-[#fefbfc] text-2xl bg-[#c14875] hover:bg-[#4b3735] rounded transition duration-700 ease-in-out">Journal Now</a>
        @else
        <div class="mt-2 flex gap-2 justify-center text-[#fefbfc] text-center">
            <a href="/register" class="w-40 px-2 py-1 text-2xl bg-[#c14875] hover:bg-[#4b3735] rounded transition duration-700 ease-in-out">Register</a>
            <a href="/login" class="w-40 px-2 py-1 text-2xl bg-[#4b3735] hover:bg-[#c14875] rounded transition duration-700 ease-in-out">Login</a>
        </div>
        
    @endauth
</main>