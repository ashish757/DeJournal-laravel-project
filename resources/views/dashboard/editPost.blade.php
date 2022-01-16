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

        <form action="update/{{$post->id}}" method="POST" enctype="multipart/form-data" id="createPostForm">
            @csrf
            <div class="m-4 flex gap-6">
                <img class="w-48 object-contain" src="{{asset('storage/'.$post->image)}}">
                <div>
                    <p class="mb-2 font-semibold text-gray-600 tracking-wider">Image</p>
                    <input type="file" name="image" placeholder="Upload main image">
                </div>
            </div>
            <div class="m-4">
                <input class="p-2 text-gray-500 bg-gray-100 border-2 focus:border-gray-400 focus:outline-none focus:bg-transparent rounded w-full" type="text" name="title" placeholder="Title.." value="{{$post->title}}">
            </div>
            <div class="m-4">
                <textarea class="p-2 text-gray-500 bg-gray-100 border-2 focus:border-gray-400 focus:outline-none focus:bg-transparent rounded w-full" name="subTitle" cols="30" rows="3" placeholder="Sub Title....">{{$post->subTitle}}</textarea>
            </div>
            <div class="m-4 border-2 bg-gray-100 focus:border-gray-400 focus:outline-none focus:bg-transparent rounded w-full flex">
                <ul class="flex gap-4 p-2" id="tagsUl">
                    @if ($post->tags != "")
                        @foreach(explode(',', $post->tags) as $tag) 
                        <li class="px-4 py-1 grid place-content-center rounded-full bg-gray-400 border-2 border-gray-500 text-gray-50 font-semibold tracking-wide">{{$tag}}</li>
                        @endforeach
                    @endif
                </ul>
                <input id="tagInput" class="p-2 text-gray-500 bg-transparent outline-none" placeholder="tags...." />
            </div>
            <div class="m-4">
                <input id="tagInputToBeSent" class="p-2 text-gray-500 bg-transparent outline-none" name="tags" hidden="true"  />
            </div>
            <div class="m-4">
                <textarea class="integrateTinyMCE p-2 text-gray-500 bg-gray-100 border-2 focus:border-gray-400 focus:outline-none focus:bg-transparent rounded w-full" name="description" cols="30" rows="10" placeholder="Post....">{{$post->description}}</textarea>
            </div>

            <button type="submit" class="mx-4 text-gray-50 text-sm p-2 px-4 rounded font-semibold bg-green-500">UPDATE</button>
            <a href="../" class="p-2 px-4 rounded text-gray-50 text-sm font-semibold bg-indigo-500">CANCEL</a>
        </form>


            </div>
        </div>

    </main>

</div>


<script>
    const tagsUl = document.querySelector("#tagsUl")
    const tagInput = document.querySelector("#tagInput")
    const createPostForm = document.querySelector("#createPostForm")
    const tagInputToBeSent = document.querySelector("#tagInputToBeSent")

    let isInputEmpty = true
    tagInput.addEventListener("keydown", (e) => {
        // console.log(e);
        if (e.code === "Backspace" && isInputEmpty) {
            const lastTag = document.querySelector('#tagsUl li:last-child')
            tagInput.value = lastTag.innerText
            tagsUl.removeChild(lastTag)
            // console.log(lastTag);
            isInputEmpty = false
            e.preventDefault();
        }
        if (e.code === "Space"){
            const li = document.createElement("li");
            li.setAttribute("class", "px-4 py-1 grid place-content-center rounded-full bg-gray-400 border-2 border-gray-500 text-gray-50 font-semibold tracking-wide");
            li.innerText = e.target.value;
            tagsUl.appendChild(li)
            tagInput.value = ""

        }

        if (e.code === "Backspace" && e.target.value.length == 1){
                isInputEmpty = true;
        }  else {
            isInputEmpty = false;
        }
        
    })
    
    createPostForm.addEventListener("submit", (e) =>  {
        const tags  = Array.from(document.querySelectorAll('#tagsUl li'))
        const parsedTags = tags.map((tag) => {
            return tag.innerText
        }).join()
        tagInputToBeSent.value = parsedTags
    })
</script>

<x-footer />