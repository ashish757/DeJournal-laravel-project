<nav class="bg-gray-800 px-12 h-16 flex items-center">
        <div class="brand">
            <span class="text-gray-100 mr-10 font-bold text-lg"><a href="/">Workflow</a></span>
        </div>
        <ul class="flex h-full items-center">
            <li class="mx-2"><a class="text-gray-200 px-4 py-2 rounded bg-gray-600 " href="/">Home</a></li>
            <li class="mx-2"><a class="text-gray-200 px-4 py-2 rounded bg-gray-600 " href="/about">About</a></li>
        </ul>

        <div class="ml-auto">
            @if(session()->has("id"))
                <a class="nav-signin-btn" href="/dashboard">Dashboard</a>
            @else
                <a class="nav-signin-btn" href="/signin">Sign In</a>
            @endif
        </div>

    </nav>