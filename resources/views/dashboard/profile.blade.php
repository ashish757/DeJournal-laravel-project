<x-Header title="Home - Laravel Web App" />
<x-navbar />


<div class="flex">
    <x-sidebar active="profile" />

    <main class="bg-gray-500 w-full">
        <div class="text-center py-4">
            <h1 class="heading text-gray-200 inline">Profile. </h1>
            @if(session()->has("msg"))
                    <p class="text-green-400 text-2xl font-bold">{{session("msg")}}</p>
                @endif
        </div>

        <div class="container mx-auto my-5 p-5">

            <!-- About Section -->
            <div class="bg-white p-3 shadow-sm rounded-sm">


                <div class="flex items-center space-x-2 font-semibold leading-8 border-b-4 border-green-400 mb-4">
                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="tracking-wide">About</span>
                </div>

                <div class="">
                    {{-- bio --}}
                    <div class="bg-white p-3 flex gap-6 overflow-hidden">
                        <div>
                            <img class="w-40" src={{ asset('storage/'.$user['avatar']) }}>
                            
                        </div>
                        <div>
                            <div class="font-bold flex items-center gap-8 mt-1">
                                <a class="bg-indigo-500 py-1 px-2 rounded text-white text-md font-semibold" href="profile/edit">Edit Profile</a>
                                <div>Followers 456</div>
                                <div>following 768</div>
                            </div>
                            <div class="mt-4">

                                <h1 class="text-gray-900 font-bold text-xl leading-8 mt-1">{{$user["name"]}}</h1>
                                <p class="text-gray-700 text-sm">{{'@'}}{{$user->username}}</p>
                                @if ($user["status"])
                                    <h3 class="text-gray-700 font-lg font-semibold leading-6">
                                        {{ $user["status"]}}
                                    </h3>
                                @else
                                    <a href="profile/edit#status" class="block text-indigo-700 hover:text-indigo-400">Add your status..</a>
                                @endif

                                @if ($user["bio"])
                                    <p class="text-sm text-gray-500 hover:text-gray-600 leading-6 w-96">
                                        {{ $user["bio"]}}
                                    </p>
                                @else
                                    <a href="profile/edit#bio" class="block text-indigo-700 hover:text-indigo-400">Few lines about yourself....</a>
                                @endif
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </main>

</div>


<x-footer />