<x-Header title="Home - Laravel Web App" />
<x-navbar />


<div class="flex">
    <x-sidebar active="createPost" />

    <main class="bg-gray-500 w-full">
        <div class="text-center py-4">
            <h1 class="heading text-gray-200 inline">New Post. </h1>
        </div>

        <div class="container mx-auto my-5 p-5">
            <div class="bg-white p-3 shadow-sm rounded-sm">

        <form action="createPost/save" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="m-4">
                <p class="mb-2 font-semibold text-gray-600 tracking-wider">Image</p>
                <input type="file" name="image" placeholder="Upload main image">
            </div>
            <div class="m-4">
                <input class="p-2 text-gray-500 bg-gray-100 border-2 focus:border-gray-400 focus:outline-none focus:bg-transparent rounded w-full" type="text" name="title" placeholder="Title..">
            </div>
            <div class="m-4">
                <textarea class="p-2 text-gray-500 bg-gray-100 border-2 focus:border-gray-400 focus:outline-none focus:bg-transparent rounded w-full" name="subTitle" cols="30" rows="3" placeholder="Sub Title...."></textarea>
            </div>
            <div class="m-4">
                <textarea class="integrateTinyMCE p-2 text-gray-500 bg-gray-100 border-2 focus:border-gray-400 focus:outline-none focus:bg-transparent rounded w-full" name="description" cols="30" rows="10" placeholder="Post...."></textarea>
            </div>

            <button type="submit" class="ml-4 p-2 px-4 rounded font-semibold bg-green-500 hover:bg-green-600">Save</button>
        </form>
            </div>
        </div>

    </main>

</div>


<x-footer />