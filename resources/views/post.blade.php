<x-Header title="{{$post->title}}" />
<x-navbar />

<main class='mt-28 max-w-2xl mx-auto'>
    <div>
        <h1 class="heading text-left mb-1 font-semibold leading-tight">{{$post->title}}</h1>
        <h3 class=" text-gray-500 font-semibold">{{$post->subTitle}}</h3>
    </div>
    
    <div class="my-10 flex gap-2 items-center justify-between pr-10">
        <div class='flex items-center gap-4'>
            <a href='/writer/{{$post->getUser->name}}' class='flex items-center gap-4'>
                <img class="w-14 h-14 object-cover rounded-full" src="{{asset('storage/'.$post->getUser->avatar)}}">
                <p class="text-green-700 text-lg">{{$post->getUser->name}}</p>
            </a>
            <button class='text-sm bg-green-300 rounded-3xl text-green-700 font-semibold px-3 py-1'>Follow</button>
        </div>
        <div class="font-semibold text-green-500 ">{{$post["created_at"]}}</div>
    </div>
    <div class="">
        <img class="w-full object-cover" src="{{asset('storage/'.$post['image'])}}">
    </div>

    <article class='mt-10 text-2xl text-gray-900'>
        {{$post->description}}
    </article>



</main>


<x-footer />