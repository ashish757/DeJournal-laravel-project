<x-Header title="Sign In - Laravel Web App"/>
<x-navbar/>

<p class="heading">Sign In</p>
    <div class="signin-form">
        @if(session()->has("invalidCred"))
            <p class="mb-4 text-red-600 text-center">{{session("invalidCred")}}</p>
        @endif
        <form action="/signin/auth" method="POST" class="flex flex-col gap-4">
            @csrf
            <div class="input-div{{ ($errors->has('email')) ? ' error'  :''}}">
                <span class="input-icon">E</span>
                <input name="email" class="input" type="text" placeholder="Email" value="{{old('email')}}">
            </div>
            <span class="text-red-600">@error ('email') {{$message}} @enderror</span>

            <div class="input-div{{ ($errors->has('password')) ? ' error'  :''}}" border-2 border-gray-500>
                <span class="input-icon">P</span>
                <input name="password" class="input" type="password" placeholder="Password">
            </div>
            <span class="text-red-600">@error ('password') {{$message}} @enderror</span>

            <p class="text-right text-blue-500 my-1"><a href="#0">Forgot password?</a></p>
            <button class="button" type="submit">SIGN IN</button>
            <p class="text-center text-gray-600 my-1">Dont have an account yet? <a href="/signup" class="text-blue-500">Create now.</a></p>
        </form>
    </div>

<x-footer/>
