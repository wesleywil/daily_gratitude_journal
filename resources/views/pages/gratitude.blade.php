@php
use Illuminate\Support\Str;
@endphp

<main class="w-full md:w-2/3 xl:w-2/4 p-4 text-[#4b3735]">
    <h1 class="text-3xl font-bold text-center">Gratitudes</h1>
    <div class="mt-4 flex flex-col gap-2 text-sm md:text-xl text-center">
        <div class="flex">
            <form method="GET" action="/gratitude" class="flex gap-1 font-semibold">
                
                <input type="text" name="search" placeholder="Search by Year" class="px-2 outline-[#c14875] border border-[#4b3735] rounded-l">
                <button type="submit" class="px-2 text-[#fefbfc] bg-[#4b3735] hover:bg-[#c14875] border border-[#4b3735] hover:border-[#c14875] rounded-r transform duration-700 ease-in-out">Search</button>
            </form>
        </div>
        <table class="table-fixed">
            <thead>
              <tr>
                <th class="px-2 bg-[#4b3735] text-[#fefbfc] border border-black">ID</th>
                <th class="bg-[#4b3735] text-[#fefbfc] border border-black">Date</th>
                <th class="bg-[#4b3735] text-[#fefbfc] border border-black">Message</th>
                <th class="bg-[#4b3735] text-[#fefbfc] border border-black">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($gratitudes as $gratitude)
                <tr class="font-semibold bg-[#fefbfc]">
                  <td class="px-2 py-1 border border-black">{{$gratitude->id}}</td>
                    <td class="px-2 py-1 border border-black">{{$gratitude->created_at->format('m-d-Y')}}</td>
                    <td class="px-2 py-1 border border-black">{{Str::limit($gratitude->message, $limit = 50, $end = '...')}}</td>
                    
                    <td class="px-2 py-1 text-[#fefbfc] border border-black">
                      <div class="w-full flex flex-col md:flex-row gap-2 justify-center">
                        <a href="/gratitude/{{$gratitude->id}}" class="px-2 bg-[#4b3735] hover:bg-[#c14875] rounded transform duration-500 ease-in-out">View</a>
                        <a href="/gratitude/{{$gratitude->id}}/delete" class="px-2 bg-[#c14875] hover:bg-[#4b3735] rounded transform duration-500 ease-in-out">Delete</a>
                      </div>
                       
                    </td>
                  </tr>
                @endforeach
             
            </tbody>
          </table>
      
    </div>
</main>