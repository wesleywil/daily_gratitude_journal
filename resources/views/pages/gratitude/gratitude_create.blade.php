<main class="w-full md:w-2/3 xl:w-2/4 p-4 text-[#4b3735]">
    <h1 class="text-3xl font-bold text-center">Daily Journal</h1>
    <div class="w-full mt-4 flex flex-col gap-2 text-xl font-semibold text-center">
        <h2>Tip of the day</h2>
        <h3 class=" text-base overflow-hidden">{{$message}}</h3>
    </div>
    <form method="POST" action="/gratitude" class="mt-2 flex flex-col gap-2">
        @csrf
        <textarea type="text" name="message" placeholder="Write Here Your Gratitude" rows="10" class="px-2 py-1 text-xl font-semibold outline-0 border border-[#c14875] rounded transition  duration-500 ease-in-out"></textarea>
        @if (session('msg'))
            <h1 class="text-xl text-[#c14875] font-bold">{{session('msg')}}</h1>
        @endif
        <button class="w-24 px-2 py-1 text-[#fefbfc] bg-[#4b3735] hover:bg-[#c14875] font-semibold rounded transform duration-700 ease-in-out">Submit</button>
    </form>
</main>
