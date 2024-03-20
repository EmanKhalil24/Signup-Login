<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('/signup.css')}}">
    <title>Registration Page</title>
</head>
<body>
    <div class="container">
        <div class="image">
            <img src="{{URL::asset('/3e9a7e17e13da18d7c8bd995e595b3bb-removebg-preview.png')}}" alt="">
        </div>

        <div class="su">
            <div class="buttons">
                <button id="signup">Sign Up</button>
                <button id="login">Log In</button>
            </div>
            <form id="loginForm" action="{{ route('login') }}" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label class="l-u" id="user-label">Username: </label>
                <br>
                <input type="text" name="username" class="i-u" placeholder="Your username..." required>
                <br><br>
                <label class="l-pa" id="pass-label">Password: </label>
                <br>
                <input type="password" name="password" class="i-pa" placeholder="Your password..." required>
                <br><br>
                <input type="submit" value="Login" class="submit">
            </form>
        
            <form id="signupForm" action="{{ route('signup') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label class="l-u" id="user-label">Username: </label>
                <br>
                <input type="text" name="username" class="i-u" placeholder="Your username..." required>
                <br><br>
                <label class="l-pa" id="pass-label">Password: </label>
                <br>
                <input type="password" name="password" class="i-pa" placeholder="Your password..." required>
                <br><br>
                <label class="l-n" id="name-label">Name: </label>
                <input type="text" name="name" class="i-n" id="name-input" placeholder="Your name..." required>
                <br><br>
                <label class="l-e" id="email-label">Email: </label>
                <input type="email" name="email" class="i-e" id="email-input" placeholder="Your email..." required>
                <br><br>
                <input type="submit" value="Sign Up" class="submit">
            </form>
        </div>

    </div>

    <script src="{{URL::asset('/signup.js')}}"></script>
</body>
</html>