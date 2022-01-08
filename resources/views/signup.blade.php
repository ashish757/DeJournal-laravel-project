<x-Header title="Sign Up - Laravel Web App"/>
<x-navbar/>

    <div class="signup-form">
        <p class="heading">Sign Up</p>
        <form action="/signup/auth" method="POST" class="flex flex-col gap-4">
            @csrf
            <div class="input-div{{ ($errors->has('name')) ? ' error'  :''}}">
                <span class="input-icon">N</span>
                <input name="name" class="input" type="text" placeholder="Name" value="{{old('name')}}">
            </div>
            <span class="text-red-600">@error ('name') {{$message}} @enderror</span>

            <div class="input-div{{ ($errors->has('email')) ? ' error'  :''}}">
                <span class="input-icon">E</span>
                <input name="email" class="input" type="email" placeholder="Email" value="{{old('email')}}">
            </div>
            <span class="text-red-600">@error ('email') {{$message}} @enderror</span>

            <div class="input-div{{ ($errors->has('password')) ? ' error'  :''}}">
                <span class="input-icon">P</span>
                <input name="password" class="input" type="password" placeholder="Password">
            </div>
            <span class="text-red-600">@error ('password') {{$message}} @enderror</span>

            <div class="input-div{{ ($errors->has('cpassword')) ? ' error'  :''}}">
                <span class="input-icon">C</span>
                <input name="cpassword" class="input" type="password" placeholder="Confirm Password">
            </div>
            <span class="text-red-600">@error ('cpassword') {{$message}} @enderror</span>

            <button class="button" type="submit">SIGN UP</button>
            <p class="text-center text-gray-600 my-1">Already have an account? <a href="signin" class="text-blue-500">Sign In fast.</a></p>
        </form>
    </div>

<x-footer/>
