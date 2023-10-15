<main class="min-h-[85vh] w-full flex flex-col items-center justify-center">
    <h1 class="mb-2 text-3xl font-bold text-center uppercase">Login</h1>
    <form method="POST" action="/login" class="w-2/3 p-2 flex flex-col gap-2 text-xl font-semibold border border-black rounded">
        @csrf
        <input type="email" name="email" placeholder="Insert your e-mail here" class="px-2 py-1 border border-black rounded">
        <input type="password" name="password" placeholder="Insert password here" class="px-2 py-1 border border-black rounded">
        
        <div class="flex gap-4 justify-center">
            <button class="px-2 py-1 text-white bg-blue-400 hover:bg-blue-600 rounded transform duration-700 ease-in-out">Submit</button>
            <button type="button" class="px-2 py-1 text-white bg-blue-400 hover:bg-blue-600 rounded transform duration-700 ease-in-out">Cancel</button>
        </div>
        <a href="/register" class="text-center text-base hover:text-blue-400 transform duration-500 ease-in">Don't have an account? Register Here</a>
    </form>
</main>

