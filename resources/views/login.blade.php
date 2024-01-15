<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{asset('/css/login.css') }}">
</head>
<body>
    <!--<a href="signup.html">LOGIN</a>-->
    <form class="form-signIn">
        <div class="icon">
            <!--<box-icon type='solid' name='user-circle'></box-icon>-->
            <img src="{{ asset('image/user.jpg') }}" width="50px">
        </div>
        <input class="data-e" placeholder="Email" type="email" name="" value="">
        <input class="data-p" placeholder="password" type="password" name="" value="">
        <p class="passFG"> <a href="#">forgot password</a></p>

        <button class="login" type=""><a href="{{url('/')}}" >login</a></button>
        <hr class="line1">
            <p class="continue-2">Or continue with</p>
        <hr class="line2">
        <button class="google"><a href="#"><img src="{{ asset('image/Google__G__Logo.jpg') }}" alt="G" width="32px"></a></button>
        <button class="facebook"><a href="#"><img src="{{ asset('image/Facebook-logo.jpg') }}" alt="F" width="40px"></a></button>
        <button class="twitter"><a href="#"><img src="{{ asset('image/twitter-logo.jpg') }}" alt="T"width="29px"></a></button>
        <button class="apple" ><a href="#"><img src="{{ asset('image/apple-logo.jpg') }}" alt="A"width="40px"></a></button>
        <h2 class="option">
            <a href="{{url('signup')}}">Register</a>
        </h2>
    </form>
</body>
</html>
