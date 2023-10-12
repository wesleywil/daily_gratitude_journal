<main class="p-4 ">
    <h1 class="text-3xl font-bold text-center">Daily Journal</h1>
    <div class="mt-4 flex flex-col gap-2 text-xl font-semibold text-center">
        <h2>Tip of the day</h2>
        <h3 class="w-[50rem] mx-auto text-base overflow-hidden">{{$message}}</h3>
    </div>
    <form method="POST" action="/gratitude" class="mt-2 flex flex-col gap-2">
        @csrf
        <textarea type="text" name="message" placeholder="Write Here Your Gratitude" rows="10" class="px-2 py-1 text-xl font-semibold outline-0 border rounded"></textarea>
        @if (session('msg'))
            <h1 class="text-xl text-red-400 font-bold">{{session('msg')}}</h1>
        @endif
        <button class="w-24 px-2 py-1 text-white bg-[#4e9b69] font-semibold rounded">Submit</button>
    </form>
</main>
