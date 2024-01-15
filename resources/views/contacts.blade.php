<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> contacts </title>
</head>
@include('header1')

<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
<link href="{{ asset('/image') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">

<!-- About Start -->

<body>
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="about-text">
                        <h2>Contact us through the link down below</h2>
                        <p>
                            Call can be done 24 hour a day
                        </p>
                        <p>
                            we have the best advisor on call to tell you the package to choose from
                        </p>
                        <a class="btn" href="tel:+254740768005"><i class="fa fa-phone-alt"></i>+254757375511</a>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="{{ asset('image/customer_care.jpg') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header">
                <p>Our Services</p>
                <h2>Provide Services NationWide</h2>
            </div>
            <div class="row">
                <div class="service">
                    <div class="container">
                        <div class="row">
                            @foreach ($glass_cleaning as $cone)
                                <div class="col-lg-3 col-md-6">
                                    <div class="service-item">
                                        <img src="{{ asset('assets/uploads/service1/' . $cone->image) }}"
                                            alt="image here" width="200px" height="200px">
                                        <h3>{{ $cone->service_name }}</h3>
                                        <p style="color:black">
                                            {{ $cone->description }}
                                        </p>
                                        <p style="color:black">
                                            <small>KES {{ $cone->Price }}</small>
                                        </p>
                                        <a class="btn" href="{{ url('services') }}">Request for service</a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-span-9">
                            <div class="service-item">
                                <a class="btn" href="{{ url('services') }}">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->


            <!-- Feature Start -->
            <div class="feature">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-header left">
                                <p>Why Choose Us</p>
                                <h2>Expert Cleaners and World Class Services</h2>
                            </div>
                            <p>
                                We operate on tight schedule, we finish the work on time, and we leave your house
                                perfectly clean in
                                a pleasant smell,finally our services are being done by experts that have learned how to
                                maintain
                                clean surrounding
                            </p>
                            <a class="btn" href="#">READ</a>
                        </div>
                        <div class="col-md-7">
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <img src="{{ asset('image/brush.jpg') }}"  class="rounded" alt="image">
                                </div>
                                <div class="col-7">
                                    <h3>Expert Cleaners</h3>
                                    <p>
                                        We have team behind the expertise of every cleaning that do exists
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <img src="{{ asset('image/resoanble price.png') }}" alt="image">
                                </div>
                                <div class="col-7">
                                    <h3>Reasonable Prices</h3>
                                    <p>
                                        we charge a pocket friendly prices ranging from the middle class family to first
                                        class
                                        family
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <img src="{{ asset('image/quickbestservices.jpeg') }}" alt="image">
                                </div>
                                <div class="col-7">
                                    <h3>Quick & Best Services</h3>
                                    <p>
                                        We offer emergency cleaning services for those who have unexpected guest and the
                                        houses are
                                        messy
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->



            <!-- FAQs Start -->
            <div class="faqs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-header left">
                                <p>You Might Ask</p>
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <img src="{{ asset('image/questions.jpg') }}" alt="image">
                        </div>
                        <div class="col-md-7">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne"
                                            aria-expanded="true">
                                            <span>1</span> whats prices do you least charge?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            Our prices range from the amount of work you need to be done for you
                                            specifically our
                                            humble cleint.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                            <span>2</span> Where are we located?
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Our main office in Kimabu,thika town thika arcade 2<superscript>rd
                                            </superscript> floor
                                            wing b .
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                            <span>3</span> Howe long does it take us to clean a one bedroom apartment?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Only 2 and half hors and we are done.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>4</span> Are our electronics safe if do not checking while cleaning ?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Yes. We are are armed with the electronic covers and the electronics are
                                            perfectly safe
                                            with us.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>5</span> Do you wash pets that that are available in the house?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            We have an expert team for washing personal pets leave whenthey are well
                                            feed.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn" href="">Ask more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->

            <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header">
                        <p>Our crew members</p>
                        <h2>Meet Our Expert Cleaners</h2>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('image/staffs/mark.jpeg') }}" alt="image">
                                </div>
                                <div class="team-text">
                                    <h2>Evans owa</h2>
                                    <h3>CEO</h3>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('image/team manager.jpeg') }}" alt="image">
                                </div>
                                <div class="team-text">
                                    <h2>Victor Anna</h2>
                                    <h3>Team Manager</h3>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('image/glass cleaning.jpg') }}" alt="image">
                                </div>
                                <div class="team-text">
                                    <h2>Lilian Achieng</h2>
                                    <h3>HR</h3>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('image/glas cleaning.jpeg') }}" alt="image">
                                </div>
                                <div class="team-text">
                                    <h2>Mark Massai</h2>
                                    <h3>Cleaner</h3>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->

            <!-- Testimonial Start -->
            <div class="testimonial">
                <div class="container">
                    <div class="section-header">
                        <p>Client Review</p>
                        <h2>Client Says About Service</h2>
                    </div>
                    <div class="owl-carousel testimonials-carousel">
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="{{ asset('image/customer/customer 1.jpeg') }}" alt="image">
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    The best cleaning service i have got in this entire year i recommend you choose the
                                    vanse
                                    cleaning company
                                </p>
                                <h3>Elizabeth Latema</h3>
                                <h4>Accountant at co-operative bank</h4>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="{{ asset('image/customer/customer2.jpeg') }}" alt="image">
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    The best company ever to clean by apartment
                                </p>
                                <h3>Mercy</h3>
                                <h4>HR</h4>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="{{ asset('image/customer/cutomer4.jpeg') }}" alt="image">
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    first class cleaning services
                                </p>
                                <h3>Evans Mwanzo</h3>
                                <h4>Profession</h4>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="{{ asset('image/HR.jpeg') }}" alt="image">
                            </div>
                            <div class="testimonial-content">
                                <p>
                                    I recommend you try this outstanding company for the nice job they have done for my
                                    suites
                                </p>
                                <h3>Brakenhast Ray</h3>
                                <h4>Chief Engineer Brakes pads limited</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
            <!-- Blog Start -->
            <div class="blog">
                <div class="container">
                    <div class="section-header">
                        <p>Latest From Blog</p>
                        <h2>Stay Updated From Our Blog</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
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
                                <a class="btn" href="">Learn More</a>
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
                                    My suite was free from webs that usually cling on the wall of my beautiful suites
                                    most on the
                                    walled glass
                                </p>
                                <a class="btn" href="">read</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item">
                                <img src="{{ asset('image/carpet scrubbing.webp') }}" alt="image">
                                <h3>Lorem ipsum dolor</h3>
                                <div class="meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Carpet Cleaning</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>3-may-23</p>
                                </div>
                                <p>
                                    The muddy door mat we know to deal with them
                                </p>
                                <a class="btn" href="#">Read</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog End -->
            <!--map-->
        </div>
        <div class="feature">
                <div class="section-header">
                    <p>Direction to our office</p>
                    <h2>Just ask for direction</h2>
                </div>
                <div class="colum">
                    <div class="col-md-12">
                            <section class="body-font relative">
                                <div class="absolute inset-0">
                                    <iframe width="100%" height="100%" frameborder="20" marginheight="0"
                                        marginwidth="0" title="map" scrolling="no"
                                        src="https://maps.google.com/maps?width=100%&amp;height=700&amp;
                                                            hl=en&amp;q=-1.0690959761990673, 37.0857440973591+(W3JP+97 Thika, Kenya)&amp;ie=UTF8&amp;
                                                            t=&amp;z=14&amp;iwloc=B&amp;output=embed"
                                        style="filter: (1) contrast(1.2) opacity(0.4);"></iframe>
                                </div>
                                <div class="map">
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>



<!-- JavaScript Libraries
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

main Javascript
<script src="js/main.js"></script>
-->

@include('footer');
