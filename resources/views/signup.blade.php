<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="cssLS/signup.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/signup.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
<div class="container">
    <div class="form-signIn">
        <form class="">
            <div class="icon">
                <!--<box-icon type='solid' name='user-circle'></box-icon>-->
                <img src="{{ asset('image/user.jpg') }}" width="50px">
            </div>

            <input class="data-l" placeholder="Name" type="text" name="" value="">
            <input class="data-e" placeholder="Email" type="email" name="" value="">
            <input class="data-p" placeholder="password" type="password" name="" value="">
            <input class="data-pc" placeholder="confirm password" type="password" name="" value="">
            <p class="Remember-me">
                <input type="checkbox" id="Remember-me" name="remember1" value="remember">
                Remember-me
            </p>
            <div class="reg">
                <button class="register" type=""><a href="{{url('login')}}">Register</a></button>
                <hr class="line1">
                <p class="continue-2">Or continue with</p>
                <hr class="line2">

                <button class="google"><a href="#"><img src="{{ asset('image/Google__G__Logo.jpg') }}"
                            alt="G" width="32px"></a></button>
                <button class="facebook"><a href="#"><img src="{{ asset('image/Facebook-logo.jpg') }}"
                            alt="F" width="40px"></a></button>
                <button class="twitter"><a href="#"><img src="{{ asset('image/twitter-logo.jpg') }}"
                            alt="T"width="29px"></a></button>
                <button class="apple"><a href="#"><img src="{{ asset('image/apple-logo.jpg') }}"
                            alt="A"width="40px"></a></button>

                <p class="terms">By registering you agree to our terms and conditions</p>
                <h2 class="option">
                    <a href="{{ url('login') }}">LOGIN</a>
                </h2>
            </div>
        </form>
    </div>
</div>
</body>

</html>
