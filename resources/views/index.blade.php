<x-Header title="Home - Laravel Web App"/>
<x-navbar/>

    <h1 class="heading text-center">DeJournal.</h1>

    <main class="ml-40">
        <x-posts :posts="$posts" />
    </main>

<x-footer/>
