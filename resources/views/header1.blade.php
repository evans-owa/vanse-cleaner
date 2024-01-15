<!DOCTYPE html>
<html lang="en">

<head>

    <link href="{{ asset('/img/blog.jpg') }}" rel="icon">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CRF TOKENR  upadates done 6/22/2023-->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vanse cleaners</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">




    <!-- CSS Libraries-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!--style--->
    <link href="{{ asset('front/css/boostrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('front/css/front.css') }}" rel="stylesheet">

    <link href="{{ asset('front/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/owl.theme.default.min.css') }}" rel="stylesheet">

    <style>
        a {
            text-decoration: none !important;
        }
    </style>

    {{-- @vite(['resources/js/app.js']) --}}
    <!-- Scripts -->
</head>
<!-- Header Start -->

<div class="header home">
    <div class="container-fluid">
        <div class="header-top row align-items-center">
            <div class="col-lg-3">
                <div class="brand">
                    <a href="{{ url('/') }}">
                        VCleaners
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="topbar">
                    <div class="topbar-col">
                        <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>+254757375511</a>
                    </div>
                    <div class="topbar-col">
                        <a href="mailto:info@example.com"><i class="fa fa-envelope"></i>vansejizzy@gmaimil.com</a>
                    </div>
                    <div class="topbar-col">
                        <div class="topbar-social">
                            <a href="https://twitter.com/_evans_owa"><i class="fab fa-twitter"></i></a>
                            <a href="https://web.facebook.com/vayji.evans"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.youtube.com/@vansejizzy4401/channels"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/vanse_evans/"><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="navbar navbar-expand-lg bg-light navbar-light">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav ml-auto">
                            <a href="{{ url('/') }}" class="nav-item nav-link "
                                {{ Request::is('dashboard') ? 'active' : '' }}><i class='fas fa-home'
                                    style='font-size:20px'></i> Home</a>
                            <a href="{{ url('services') }}" class="nav-item nav-link"
                                {{ Request::is('services') ? 'active' : '' }}><i class='fas fa-dumpster'
                                    style='font-size:20px'></i> Service</a>
                            <a href="{{ url('project') }}" class="nav-item nav-link"><i class='fas fa-bookmark'
                                    style='font-size:20px'></i> Missions</a>
                            <a href="{{ url('campaign') }}" class="nav-item nav-link"><i class='fas fa-flag'
                                    style='font-size:20px'></i> campaign</a>
                            <a href="{{ url('about') }}" class="nav-item nav-link"> <i class='fas fa-dice-d6'
                                    style='font-size:20px'> </i> About</a>
                            <a href="{{ url('contacts') }}"class="nav-item nav-link"><i class='fas fa-phone'
                                    style='font-size:15px'></i> Contact</a>

                            <div class="nav-item dropdown">
                                <p class="nav-link dropdown-toggle " data-toggle="dropdown">View modes</p>
                                <div class="dropdown-menu">
                                    <a href="{{ url('category') }}" class="dropdown-item"> <i class='fas fa-pallet'
                                            style='font-size:24px'></i> categories</a>
                                    <a href="#" class="dropdown-item">Areas</a>
                                </div>
                            </div>
                            <a href="{{ url('waitingcart') }}" class="nav-item nav-link"> <i class='fas fa-dolly'
                                    style='font-size:20px'></i> Reqest waiting</a> </button>
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
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                                                {{ __('My-request') }}
                                            </a>
                                            <a class="dropdown-item" href="{{ url('userviewprofile') }}">
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
                    </div>
                </div>
            </div>
        </div>
        <!--part of can be contained in here-->
    </div>
</div>
