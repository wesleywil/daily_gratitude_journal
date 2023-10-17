@php
use Illuminate\Support\Str;
@endphp

<main class="min-h-[85vh] w-full md:w-2/3 xl:w-2/4 flex flex-col items-center justify-center text-[#4b3735]">
    <h1 class="mb-4 px-2 text-2xl md:text-3xl text-center font-bold">
        Are you sure you want to delete this gratitude message?
    </h1>
    <form
        method="POST"
        action="/gratitude/{{$gratitude->id}}/delete"
        class="w-full mt-2 flex gap-2 justify-center text-center"
    >
    @csrf
        <button
            class="w-1/3 xl:w-36 px-2 py-1 text-xl font-semibold text-[#fefbfc] bg-[#c14875] hover:bg-[#4b3735] rounded transition duration-500 ease-in-out"
        >
            Yes
        </button>
        <a
            href="/gratitude/{{$gratitude->id}}"
            type="button"
            class="w-1/3 xl:w-36 px-2 py-1 text-xl font-semibold text-[#fefbfc] bg-[#4b3735] hover:bg-[#c14875] rounded transition duration-500 ease-in-out"
        >
            No
        </a>
    </form>
    <h2 class="my-2 text-2xl font-semibold">Message to be deleted</h2>
    <div
        class="p-4 flex flex-col items-center text-[#fefbfc] bg-[#4b3735] rounded overflow-y-auto"
    >
        <h2 class="mb-2 border-b border-[#c14875]">Created At: {{$gratitude->created_at->format('m-d-Y')}}</h2>
        <p class="px-2 text-xl">{{$gratitude->message}}</p>
    </div>

    
</main>
