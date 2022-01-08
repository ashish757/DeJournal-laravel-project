<x-Header title="Home - Laravel Web App"/>
<x-navbar/>

    <h1 class="heading text-center">DeJournal.</h1>

    <main class="ml-40">
        @foreach ($posts as $post)
            <div class="p-4 flex gap-3 justify-between" style="min-height: 188px;">
                <div class="max-w-xl" style="min-width: 15rem">
                    <a href='/writer/{{$post->getUser->name}}' class='flex items-center gap-2'>
                        <img class="w-6 h-6 object-cover rounded-full" src="{{asset('storage/'.$post->getUser->avatar)}}">
                        <p class="ml-1 text-green-600 text-sm">{{$post->getUser->name}}</p>
                    </a>
                    <a href="/posts/{{$post->title}}/{{$post->id}}" class="text-gray-700  hover:text-indigo-600">
                        <h1 class="font-bold text-2xl">{{$post["title"]}}</h1>
                        <p class="text-gray-500">{{$post["subTitle"]}}</p>
                    </a>
                    <div>
                        <div class="inline-block text-gray-500 pl-0 p-2">{{$post["created_at"]}}</div>
                    </div>
                </div>
                <div class="flex-grow relative">
                    <img style="max-width: 16rem; max-height: 10rem;" class="w-full h-full object-cover absolute top-0 left-5 " src="{{asset('storage/'.$post['image'])}}">
                </div>
        
            </div>
        @endforeach
    </main>

<x-footer/>
