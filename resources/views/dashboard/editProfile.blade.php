<x-Header title="Home - Laravel Web App" />
<x-navbar />


<div class="flex">
    <x-sidebar active="profile" />

    <main class="text-gray-600 bg-gray-500 w-full">
        <div class="text-center py-4">
            <h1 class="heading text-gray-200 inline">Edit Profile. </h1>
        </div>

        <div class="container mx-auto my-5 p-5">

            <!-- About Section -->
            <div class="bg-white p-3 shadow-sm rounded-sm">


                <div class="flex items-center space-x-2 font-semibold leading-8 border-b-4 border-green-400 mb-4">
                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="tracking-wide">Edit your profile</span>
                </div>
                <form action="edit/update" method="POST" class="p-3 grid grid-cols-[auto_1fr] gap-10" enctype="multipart/form-data">
                    @csrf

                    <img class="w-40"
                        src="{{asset('storage/'.$user['avatar'])}}">
                    <div class="py-10">
                        <p class="mb-2">Change Image</p>
                        <input type="file" name="avatar" placeholder="Select your Avatar">
                    </div>

                    <label class="text-right text-gray-600 font-semibold">Name</label>
                    <input class="border border-gray-400 text-gray-700 font-semibold py-2 px-4 w-full max-w-md"
                        type="text" value="{{$user['name']}}" name="name">

                    <label class="text-right text-gray-600 font-semibold">Status</label>
                    <input id="status" name="status" class="border border-gray-400 text-gray-700 font-semibold py-2 px-4 w-full max-w-md"
                        type="text" value="{{$user['status']}}" placeholder="Add your status...">

                    <label class="text-right text-gray-600 font-semibold">Bio</label>
                    <textarea id="bio" class="border border-gray-400 text-gray-700 font-semibold py-2 px-4 w-full max-w-md"
                        name="bio" rows="5" placeholder="Add your Bio....">{{$user['bio']}}</textarea>
                    <span></span>
                    <div>
                        <button type="submit" class="py-1 px-3 mr-3 text-gray-50 bg-green-500 rounded max-w-fit">UPDATE</button>
                        <a href="../profile" class="py-1 px-3 text-gray-50 bg-indigo-500 rounded max-w-fit">CANCEL</a>
                    </div>

                </form>



            </div>

        </div>

    </main>

</div>


<x-footer />