<main class="min-h-[85vh] w-full xl:w-2/3 flex flex-col items-center justify-center text-[#4b3735]">
    <h1 class="mb-2 text-3xl font-bold text-center uppercase">Register</h1>
    <form method="POST" action="/register" class="w-2/3 p-2 flex flex-col gap-2 text-xl font-semibold border border-[#4b3735] rounded">
        @csrf
        <input type="text" name="name" placeholder="Name" class="px-2 py-1 outline-[#c14875] border border-[#4b3735] rounded">
        <input type="email" name="email" placeholder="E-mail" class="px-2 py-1 outline-[#c14875] border border-[#4b3735] rounded">
        <input type="password" name="password" placeholder="Password" class="px-2 py-1 outline-[#c14875] border border-[#4b3735] rounded">
        <input type="password" name="password_confirmation" placeholder="Confirm password" class="px-2 py-1 outline-[#c14875] border border-[#4b3735] rounded">
        <div class="flex gap-4 justify-center">
            <button class="px-2 py-1 text-[#fefbfc] bg-[#4b3735] hover:bg-[#c14875] rounded transform duration-700 ease-in-out">Submit</button>
            <button type="button" class="px-2 py-1 text-[#fefbfc] bg-[#4b3735] hover:bg-[#c14875] rounded transform duration-700 ease-in-out">Cancel</button>
        </div>
        <a href="/login" class="text-center text-base hover:text-[#c14875] transform duration-500 ease-in">Already Have an Account? Sign In Here</a>
    </form>
</main>

