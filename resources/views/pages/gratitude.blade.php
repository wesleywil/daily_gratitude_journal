@php
use Illuminate\Support\Str;
@endphp

<main class="p-4">
    <h1 class="text-3xl font-bold text-center">Gratitudes</h1>
    <div class="mt-4 flex flex-col gap-2 text-xl text-center">
        <div class="flex">
            <form method="GET" action="/gratitude" class="flex">
                
                <input type="text" name="search" placeholder="Search by Year" class="px-2 rounded-l">
                <button type="submit" class="px-2 bg-green-400 hover:bg-green-600 rounded-r">Search</button>
            </form>
        </div>
        <table class="table-fixed">
            <thead>
              <tr>
                <th class="bg-red-400 border border-black">ID</th>
                <th class="bg-red-400 border border-black">Date</th>
                <th class="bg-red-400 border border-black">Message</th>
                <th class="bg-red-400 border border-black">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($gratitudes as $gratitude)
                <tr>
                  <td class="px-2 py-1 border border-black">{{$gratitude->id}}</td>
                    <td class="px-2 py-1 border border-black">{{$gratitude->created_at->format('m-d-Y')}}</td>
                    <td class="px-2 py-1 border border-black">{{Str::limit($gratitude->message, $limit = 50, $end = '...')}}</td>
                    
                    <td class="px-2 py-1 border border-black">
                        <a href="/gratitude/{{$gratitude->id}}" class="px-2 bg-green-400 hover:bg-green-600 rounded">View</a>
                        <a href="/gratitude/{{$gratitude->id}}/delete" class="px-2 bg-red-400 hover:bg-red-600 rounded">Delete</a>
                    </td>
                  </tr>
                @endforeach
             
            </tbody>
          </table>
      
    </div>
</main>