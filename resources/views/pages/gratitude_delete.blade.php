<main class="min-h-[85vh] w-full flex flex-col items-center justify-center">
    <h1 class="mb-4 text-3xl font-bold">
        Are you sure you want to delete this gratitude message?
    </h1>
    <form
        method="POST"
        action="/gratitude/{{$gratitude->id}}/delete"
        class="w-full mt-2 flex gap-2 justify-center text-center"
    >
    @csrf
        <button
            class="w-1/3 px-2 py-1 text-xl font-semibold text-white bg-red-400 hover:bg-red-600 rounded transform duration-500 ease-in-out"
        >
            Yes
        </button>
        <a
            href="/gratitude/{{$gratitude->id}}"
            type="button"
            class="w-1/3 px-2 py-1 text-xl font-semibold text-white bg-blue-400 hover:bg-blue-600 rounded transform duration-500 ease-in-out"
        >
            No
        </a>
    </form>
    <h2 class="mb-2 text-2xl font-semibold">Message to be deleted</h2>
    <div
        class="w-96 h-60 flex flex-col items-center text-white bg-gray-500 rounded overflow-y-auto"
    >
        <p class="px-2 text-xl">{{$gratitude->message}}</p>
    </div>

    
</main>
