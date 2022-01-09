<x-Header title="Sign Up - Laravel Web App"/>
<x-navbar/>

    <div class="signup-form">
        <p class="heading">Username.</p>
        <form action="/signup/auth/username" method="POST" class="flex flex-col gap-4">
            @csrf
            <div class="input-div{{ ($errors->has('username')) ? ' error'  :''}}">
                <span class="input-icon">U</span>
                <input name="username" class="input" type="text" placeholder="Username" value="{{session("username")}}">
            </div>
            <span class="text-red-600">@error ('username') {{$message}} @enderror</span>
            <span class="text-gray-600">Dont worry if confused you can always change it later...</span>
            <button class="button" type="submit">SAVE</button>
        </form>
    </div>

<x-footer/>
