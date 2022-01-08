<x-Header title="Home - Laravel Web App" />
<x-navbar />


<style>
    .actions {
        display: none;
    }
    tr:hover .actions {
        display: block;
    }
</style>

<div class="flex">
    <x-sidebar active="posts" />

    <main class="bg-gray-500 w-full">
        <div class="text-center py-4">
            <h1 class="heading text-gray-200 inline">Posts. </h1>
        </div>

        <div class="container mx-auto my-5 p-5">
            

            <div class="bg-white p-3 shadow-sm rounded-sm">
                @if(session()->has("msg"))
                    <p class="p-6 text-gray-600 text-2xl font-semibold">{{session("msg")}}</p>
                @endif
                <table class="table-auto w-full divide-y divide-gray-200 border border-gray-200">
                    <thead class="bg-gray-100">
                      <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">TITLE</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">DESCRIPTION</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @foreach ($posts as $post)
                        <tr class="hover:bg-gray-100 odd:bg-gray-50">
                            <td class="px-6 py-4">{{$post["id"]}}</td>
                            <td class="px-6 py-4 whitespace-pre-line">{{$post["title"]}}</td>
                            <td class="px-6 py-4 flex items-center justify-between relative">
                                <div class="whitespace-pre-line">{{$post["description"]}}</div>
                                <div class="actions mt-2 absolute right-2">
                                    <a href="" class="mr-2 py-1 px-2 text-sm rounded text-cyan-600 bg-cyan-300 font-semibold opacity-90 hover:opacity-100">View</a>
                                    <a href="/dashboard/posts/edit/{{$post->id}}" class="mr-2 py-1 px-2 text-sm rounded text-indigo-600 bg-indigo-300 font-semibold opacity-90 hover:opacity-100">Edit</a>
                                    <a href="" class="py-1 px-2 text-sm rounded text-red-600 bg-red-300 font-semibold opacity-90 hover:opacity-100">Delete</a>
                                </div>
                            </td>
                        </tr>
                      @endforeach
                      
                    </tbody>
                  </table>

            </div>

        </div>

    </main>

</div>


<x-footer />