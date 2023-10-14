@php
use Illuminate\Support\Str;
@endphp

<main class="min-w-full p-4 flex flex-col items-center">
    <h1 class="text-3xl font-bold text-center">Gratitude Details</h1>
    <div class=" w-2/3 flex justify-between">
        <button class="w-24 mb-1 px-2 py-1 text-center text-white font-semibold bg-red-400 hover:bg-red-600 rounded transform duration-500 ease-in-out">Delete</button>
        <a class="self-end pr-2"><span class="font-bold">Created At:</span> {{$gratitude->created_at->format('m-d-Y')}}</a>
    </div>
    <form method="POST" action="/gratitude/{{$gratitude->id}}" class="w-2/3">
        @csrf
        <textarea name="message" rows="10" class="w-full px-2 py-1 text-xl font-semibold outline-0 border rounded">{{$gratitude->message}}</textarea>
        <button class="w-24 px-2 py-1 text-white bg-[#4e9b69] font-semibold rounded">Update</button>
    </form>
</main>