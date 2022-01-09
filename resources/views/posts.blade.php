<x-Header title="Posts - Laravel Web App"/>
<x-navbar/>

    <h1 class="heading text-center">Posts.</h1>

<main class="ml-40">
    <x-posts :posts="$posts" />
</main>

<x-footer/>
