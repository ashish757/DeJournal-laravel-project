<nav class="bg-gray-800 px-12 h-16 flex items-center justify-around">
    <div class="flex">
        <div class="brand">
            <span class="text-gray-100 mr-10 font-bold text-lg"><a href="/">DeJournal</a></span>
        </div>
        <ul class="flex h-full items-center">
            <li class="mx-2"><a class="nav-btn {{$active === "home" ? "nav-btn-active" : ""}}" href="/">Home</a></li>
            <li class="mx-2"><a class="nav-btn {{$active === "about" ? "nav-btn-active" : ""}}" href="/about">About</a></li>
        </ul>
    </div>
    <div class="grow max-w-lg">
        <div class="search flex rounded bg-gray-600 overflow-hidden ">
                <select id="scope" class="outline-none pl-2 bg-gray-600 text-gray-400" name="scope">
                    <option value="all" {{session('scope') === 'all' ? 'selected' : ""}}>All</option>
                    <option value="journals" {{session('scope') === 'journals' ? 'selected' : ""}}>Journals</option>
                    <option value="tags" {{session('scope') === 'tags' ? 'selected' : ""}}>Tags</option>
                </select>
                <input id="query" class="ml-2  border-l-2 border-gray-600 w-full outline-none text-base bg-transparent text-white" type="text" placeholder="Search...." style="background-color: rgb(80 90 104); padding: .69rem 1rem;" name="query" value="{{session('query') ?? ''}}">
                <button id="searchBtn" class="px-5 min-h-full text-gray-200 text-lg  border-l-2 border-gray-600" style="background-color: rgb(80 90 104)">search</button>
            </div>
    </div>
    <div>
        <div>
            @if(session()->has("id"))
            <a class="inline-block nav-btn-active" href="/dashboard">Dashboard</a>
            @else
            <a class="inline-block nav-btn-active" href="/signin">Sign In</a>
            @endif
        </div>
    </div>

    </nav>

    <script>
        const searchBtn = document.querySelector("#searchBtn")
        const scope = document.querySelector("#scope")
        const query = document.querySelector("#query")
        
        searchBtn.addEventListener("click", (e) => {
            location.href = "/search/" + scope.value + "/" + query.value;
        })
    </script>