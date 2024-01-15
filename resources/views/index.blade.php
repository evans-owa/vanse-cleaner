@include('header')
<link rel="stylesheet" href="{{asset('/css/style.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">



<body>
     <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="{{ asset('image/homes srcubbiong.jpg') }}" alt="image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="about-text">
                        <h2><span>6</span> Months Experience</h2>
                        <p>
                            We have worked with different companies and our service is the best to offer the how
                            cleaning services
                        </p>
                        <p>
                            The award winning industries for cleaning services in the
                            entire east african two times in a raw, we have worked with
                            several companies through reference of the best work that we got to offer for various
                            periods of time.
                        </p>
                        <a class="btn" href="{{url('services')}}">Request Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header">
                <p>Our Services</p>
                <h2>Provide Services NationWide</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('image/floor srubbing.jpg') }}" alt="image">
                        <h3>Floor Cleaning</h3>
                        <p>
                            we do scrubbing and stain removal from the surface floors
                        </p>
                        <a class="btn" href="{{url('services')}}">Request Service</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('image/glass 2.jpg') }}" alt="image">
                        <h3>Glass Cleaning industrial</h3>
                        <p>
                            scrubbing of extra cleaning of the glass itself
                        </p>
                        <a class="btn" href="{{url('services')}}">Request Service</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('image/glass cleaning.jpg') }}" alt="image">
                        <h3>Glass Cleaning homes </h3>
                        <p>
                            scrubbing of extra cleaning of the glass itself
                        </p>
                        <a class="btn" href="">Requset service</a>
                    </div>
                </div> <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('image/sky crappers claning.jpeg') }}" alt="image">
                        <h3>Glass Cleaning skycrapper</h3>
                        <p>
                            scrubbing of extra cleaning of the glass itself
                        </p>
                        <a class="btn" href="{{url('services')}}">Request Service</a>
                    </div>
                </div> <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('image/industrial cleaning.webp') }}" alt="image">
                        <h3>Roof top cleaning</h3>
                        <p>
                            scrubbing of extra cleaning of the glass itself
                        </p>
                        <a class="btn" href="{{url('services')}}">Request Service</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('image/carpet scrubbing.webp') }}" alt="image">
                        <h3>Carpet Cleaning</h3>
                        <p>
                            Includes hole carpets , football carpets, floor carpet and much more
                        </p>
                        <a class="btn" href="{{url('services')}}">Request Service</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('image/bathtab clean.jpg') }}" alt="image">
                        <h3>Bath tab Cleaning</h3>
                        <p>
                            Majorly bowls and bath tabs scrubbing
                        </p>
                        <a class="btn" href="{{url('services')}}">Request service</a>
                    </div>
                </div>

            </div>
            <div class="col-span-9">
                <div class="service-item">
            <a class="btn" href="{{url('services')}}">View More</a>
                </div>
            </div>
        </div>
    </div>
<!--updates-->
    <div class="blog">
        <div class="container">
            <div class="section-header">
                <p>Latest From Our Updates</p>
                <h2>Stay Updated From Our Our</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <img src="{{ asset('image/floor srubbing.jpg') }}" alt="image">
                        <h3>Updates about Our fellows</h3>
                        <div class="meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Flour Cleaning</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>1-may-23</p>
                        </div>
                        <p>
                            The service we offer are genuine and presented without dought
                        </p>
                        <a class="btn" href="{{url('contacts')}}">Explore</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <img src="{{ asset('image/glass cleaning.jpg') }}" alt="image">
                        <h3> On the cleaning</h3>
                        <div class="meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Glass Cleaning</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>12-may-23</p>
                        </div>
                        <p>
                            My suite was free from webs that usually cling on the wall of my beautiful suites most on the
                            walled glass
                        </p>
                        <a class="btn" href="{{url('contacts')}}">Explore</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <img src="{{ asset('image/carpet scrubbing.webp') }}" alt="image">
                        <h3>Stain clearing</h3>
                        <div class="meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="">Carpet Cleaning</a>
                            <i class="fa fa-calendar-alt"></i>
                            <p>3-may-23</p>
                        </div>
                        <p>
                            The muddy door mat we know to deal with them
                        </p>
                        <a class="btn" href="{{url('contacts')}}">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('footer');

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- main Javascript -->
<script src="js/main.js"></script>
