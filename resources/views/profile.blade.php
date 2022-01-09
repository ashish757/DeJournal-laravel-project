<x-Header title="Sign In - Laravel Web App"/>
<x-navbar/>

<div class="bg-indigo-300 h-64 relative">
    
    <h1 class="heading text-8xl tracking-wider m-0 absolute bottom-5 left-1/2 -translate-x-1/2">{{$user["name"]}}</h1>
</div>

<div class="flex gap-8 mx-auto max-w-fit my-14">
    <img class="h-40 w-40 object-cover rounded-full border-4 border-indigo-500" src="{{asset('storage/'.$user->avatar)}}">
    <div>
        <div class="flex mt-6 mb-4 gap-5">
            <button class="bg-indigo-500 py-1 px-2 rounded text-white text-md font-semibold">Follow</button>
            <div>Followers 456</div>
            <div>following 768</div>
        </div>
        <h1 class="text-gray-800 font-semibold">{{$user->name}}</h1>
        <p class="text-gray-500">{{'@'}}{{$user->username}}</p>
        <div class="mt-4">

                <h3 class="text-gray-700 font-lg font-semibold leading-6">
                    {{ $user["status"]}}
                </h3>
       
                <p class="text-sm text-gray-500 hover:text-gray-600 leading-6 w-96">
                    {{ $user["bio"]}}
                </p>
        
        </div>
    </div>
</div>

<div class="flex flex-col items-center">
    <x-posts :posts="$user->getPosts" :user="$user" />
</div>
    
<x-footer/>
