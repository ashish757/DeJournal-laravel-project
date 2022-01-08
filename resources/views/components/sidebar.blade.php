<style>
    .{{$active}} {
        background: rgb(34, 42, 54);
        color: rgb(228, 228, 228);
    }

</style>

<aside class="p-2 sticky top-0 left-0 flex flex-col" style="height: calc(100vh - 64px)">
    <div class="my-1 p-4 flex items-center justify-center font-bold text-gray-600 text-2xl"><a href="/dashboard">{{$user["name"]}}</a></div>
    <div class="border-b my-2"></div>
    <div class="flex flex-col gap-2 text-gray-500 font-semibold">
        <div>
            <a class="dashboard block p-2 px-4 w-64 rounded hover:bg-gray-700 cursor-pointer" href="/dashboard">Dashboard</a>
        </div>
        <div>
            <a class="profile block p-2 px-4 w-64 rounded hover:bg-gray-700 cursor-pointer" href="/dashboard/profile">Profile</a>
        </div>
        <div>
            <a class="posts block p-2 px-4 w-64 rounded hover:bg-gray-700 cursor-pointer" href="/dashboard/posts">Posts</a>
        </div>
        <div>
            <a class="createPost block p-2 px-4 w-64 rounded hover:bg-gray-700 cursor-pointer" href="/dashboard/createPost">Create Post</a>
        </div>
    </div>

    <div class="align-self-center mt-auto">
        <a class="bg-green-600 font-semibold text-white rounded px-2 py-1" href="/logout">logout</a>
    </div>

</aside>