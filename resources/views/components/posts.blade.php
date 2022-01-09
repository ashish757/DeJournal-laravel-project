@foreach ($posts as $post)
    <div class="p-4 flex gap-3 justify-between max-w-3xl min-h-[188px]">
        <div class="max-w-[30rem] min-w-[30rem]">
            <a href='/writer/{{$user ? $user->username : $post->getUser->username}}' class='flex items-center gap-2'>
                <img class="w-6 h-6 object-cover rounded-full" src="{{asset('storage/'.($user ? $user->avatar : $post->getUser->avatar))}}">
                <p class="ml-1 text-green-600 text-sm">{{$user ? $user->name : $post->getUser->name}}</p>
            </a>
            <a href="/posts/{{$post->title}}/{{$post->id}}" class="text-gray-700  hover:text-indigo-600">
                <h1 class="font-bold text-2xl">{{$post["title"]}}</h1>
                <p class="text-gray-500">{{$post["subTitle"]}}</p>
            </a>
            <div>
                <div class="inline-block text-gray-500 pl-0 p-2">{{$post["created_at"]}}</div>
            </div>
        </div>
        <div class="">
            <img class="w-full min-h-full object-cover min-w-[16rem]" src="{{asset('storage/'.$post['image'])}}">
        </div>

    </div>
    @endforeach