<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Services </title>
</head>
@include('header1')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>services</h2>
            </div>
        </div>
    </div>
</div>

<body>
    <!-- trending servicves-->
    <div class="container">
        <div class="letter">
            <div class="col-12">
                <h2> trending services</h2>
            </div>
        </div>
    </div>
    <div class="service">
        <div class="container">
            <div class="row">
                <div class="owl-carousel trend-carousel owl-theme">
                    @foreach ($trending_service as $trend)
                        <div class="item">
                            <div class="service-item">
                                <a href="{{ url('service/' . $trend->category . '/' . $trend->service_name) }}">
                                    <img src="{{ asset('assets/uploads/service1/' . $trend->image) }}" alt="image here">
                                    <h3>{{ $trend->service_name }}</h3>
                                    <p>
                                        {{ $trend->description }}
                                    </p>
                                    <p style="color:black">
                                        <small>KES {{ $trend->Price }}</small>
                                    </p>
                                    <a class="btn" href="{{ url('service/'.$trend->category . '/' . $trend->service_name) }}">Request for service</a>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
        <script>
            $('.trend-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        </script>
    @endsection

    <!--glass services-->
    <div class="letter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2>GLASS CLEANING</h2>
                    <p>perfect view with clean glass</p>
                </div>
            </div>
        </div>
    </div>
    <div class="service">
        <div class="container">
            <div class="row">
                @foreach ($glass_service as $glass)
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <a href="{{ url('service/' . $glass->category . '/' . $glass->service_name) }}">
                                <img src="{{ asset('assets/uploads/service1/' . $glass->image) }}" alt="image here"
                                    width="200px" height="200px">
                                <h3>{{ $glass->service_name }}</h3>
                                <p>
                                    {{ $glass->description }}
                                </p>
                                <p style="color:black">
                                    <small>KES {{ $glass->Price }}</small>
                                </p>
                                <a class="btn" href="{{ url('service/' . $glass->category . '/' . $glass->service_name) }}">Request for service</a>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--House cleaning-->
    <div class="letter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2>HOUSE CLEANING</h2>
                    <p>perfect view with clean glass</p>
                </div>
            </div>
        </div>
        <div class="service">
            <div class="container">
                <div class="row">
                    @foreach ($house_service as $house)
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <a href="{{ url('service/' . $house->category . '/' . $house->service_name) }}">
                                    <img src="{{ asset('assets/uploads/service1/' . $house->image) }}" alt="image here"
                                        width="200px" height="200px">
                                    <h3>{{ $house->service_name }}</h3>
                                    <p style="color:black">
                                        {{ $house->description }}
                                    </p>
                                    <p style="color:black">
                                        <small>KES {{ $house->Price }}</small>
                                    </p>
                                    <a class="btn" href="{{ url('service/' . $house->category . '/' . $house->service_name) }}">Request for service</a>
                                </a>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--Commercial services-->
    <div class="letter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2>Commercial Cleaning</h2>
                    <p>Perfect working space</p>
                </div>
            </div>
        </div>
    </div>
    <div class="service">
        <div class="container">
            <div class="row">
                @foreach ($commercial_service as $commercial)
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <a href="{{ url('service/' . $commercial->category . '/' . $commercial->service_name) }}">
                                <img src="{{ asset('assets/uploads/service1/' . $commercial->image) }}"
                                    alt="image here" width="200px" height="200px">
                                <h3>{{ $commercial->service_name }}</h3>
                                <p style="color:rgb(50, 30, 30)">
                                    {{ $commercial->description }}
                                </p>
                                <p style="color:rgb(62, 56, 56)">
                                    <small>KES {{ $commercial->Price }}</small>
                                </p>
                                <a class="btn" href="{{ url('service/' . $commercial->category . '/' . $commercial->service_name) }}">Request for service</a>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--industrial_service-->
    <div class="letter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2>Industrail CLEANING</h2>
                    <p>perfect view with large industries</p>
                </div>
            </div>
        </div>
        <div class="service">
            <div class="container">
                <div class="row">
                    @foreach ($industrial_service as $industrial)
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <a
                                    href="{{ url('service/' . $industrial->category . '/' . $industrial->service_name) }}">
                                    <img src="{{ asset('assets/uploads/service1/' . $industrial->image) }}"
                                        alt="image here" width="200px" height="200px">
                                    <h3>{{ $industrial->service_name }}</h3>
                                    <p style="color:black">
                                        {{ $industrial->description }}
                                    </p>
                                    <p style="color:black">
                                        <small>KES {{ $industrial->Price }}</small>
                                    </p>
                                    <a class="btn" href="{{ url('service/' . $industrial->category . '/' . $industrial->service_name) }}">Request for service</a>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

@include('footer')
