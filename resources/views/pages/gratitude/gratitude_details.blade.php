@php
use Illuminate\Support\Str;
@endphp

<main class="w-full md:w-2/3 xl:w-2/4 p-4 flex flex-col items-center text-[#4b3735]">
    <h1 class="text-3xl font-bold text-center">Gratitude Details</h1>
    <div class="w-full flex justify-between">
        <a href="/gratitude/{{$gratitude->id}}/delete" class="w-24 mb-1 px-2 py-1 text-center text-[#fefbfc] font-semibold bg-[#c14875] hover:bg-[#4b3735] rounded transform duration-500 ease-in-out">Delete</a>
        <h2 class="self-end pr-2"><span class="font-bold">Created At:</span> {{$gratitude->created_at->format('m-d-Y')}}</h2>
    </div>
    <form method="POST" action="/gratitude/{{$gratitude->id}}" class="w-full">
        @csrf
        <textarea name="message" rows="10" class="w-full px-2 py-1 text-xl font-semibold outline-0 border rounded">{{$gratitude->message}}</textarea>
        <button class="w-24 px-2 py-1 text-[#fefbfc] bg-[#4b3735] hover:bg-[#c14875] font-semibold rounded transition duration-500 ease-in-out">Update</button>
    </form>
</main>