<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vanse cleaners</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- @vite(['resources/js/app.js']) --}}
</head>


<div class="@apply relative w-full pt-2.5 pb-0 px-0
    background: #143f08">
    <div class="header home">
        <div class="container-fluid">
            <div class="header-top row align-items-center">
                <div class="col-lg-3">
                    <div class="brand">
                        <a href="{{ url('/') }}">
                            VCleaners
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="topbar">
                        <div class="topbar-col">
                            <a href="tel:+254757375511"><i class="fa fa-phone-alt"></i>+254757375511</a>
                        </div>
                        <div class="topbar-col">
                            <a href="mailto:vansejizzy20@gmail.com"><i
                                    class="fa fa-envelope"></i>vansejizzy@gmaimil.com</a>
                        </div>
                        <div class="topbar-col">
                            <div class="topbar-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="navbar navbar-expand-lg bg-light navbar-light">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav ml-auto">
                                <a href="{{ url('/') }}"
                                    class="nav-item nav-link"{{ Request::is('dashboard') ? 'active' : '' }}><i class='fas fa-home'
                                    style='font-size:20px'></i> Home</a>
                                <a href="{{ url('services') }}" class="nav-item nav-link"
                                    {{ Request::is('services') ? 'active' : '' }}> <i class='fas fa-dumpster'
                                    style='font-size:20px'></i> Service</a>
                                <a href="{{ url('project') }}" class="nav-item nav-link"> <i class='fas fa-bookmark'
                                    style='font-size:20px'></i> Missions</a>
                                <a href="{{ url('campaign') }}" class="nav-item nav-link"> <i class='fas fa-flag'
                                    style='font-size:20px'></i> campaign</a>
                                <a href="{{ url('about') }}" class="nav-item nav-link"> <i class='fas fa-dice-d6'
                                    style='font-size:20px'> </i> About</a>
                                <a href="{{ url('contacts') }}"class="nav-item nav-link"> <i class='fas fa-phone'
                                    style='font-size:15px'></i> Contact</a>
                                <a href="{{ url('category') }}" class="nav-item nav-link"> <i class='fas fa-pallet'
                                            style='font-size:24px'></i> categories</a>
                                <a href="{{ url('services') }}" class="btn nav-item">BEST</a>
                            </div>
                            <div>
                                <ul class="navbar-nav ms-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ url('my-order') }}">
                                                    {{ __('my-request') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ url('index') }}">
                                                    {{ __('My profile') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                            @section('content')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hero row align-items-center">
                    <div class="col-md-7">
                        <h2>Best & Trusted</h2>
                        <h2><span>Cleaning</span> Service</h2>
                        <p>Once we clean your homestead it will be extremely perfect for you family </p>
                        <a class="btn" href="">Explore Now</a>
                    </div>
                    <div class="col-md-5">
                        <div class="form">
                            <h3>Get the best cleaner</h3>
                            <!--alert quick message-->
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif

                            <form action="quickmessage" method="post">

                                @csrf

                                <input class="form-control" type="email" name="email" placeholder="Email"
                                    value="{{ old('email') }}">
                                <span style="color:red">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>

                                <input class="form-control" type="text" name="location" placeholder="Location"
                                    value="{{ old('Location') }}">
                                <span style="color:red">
                                    @error('location')
                                        {{ $message }}
                                    @enderror
                                </span>

                                <input class="form-control" type="text" name="serviceneeded"
                                    placeholder="Service needed" value="{{ old('serviceneeded') }}">
                                <span style="color:red">
                                    @error('serviceneeded')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <button class="btn btn-block" type="submit">Get the best cleaner</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
