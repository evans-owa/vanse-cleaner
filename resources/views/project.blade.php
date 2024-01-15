<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Missions</title>
</head>
<body>
@include('header1')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Mission</h2>
                </div>
            </div>
        </div>
    </div>



    <!--Mission-->
    <div class="mission">
        <div class="container">
            <div class="section-header">
                <h2>Visit Our Running:Completed:Upcoming Missions</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul id="mission-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".completed">Completed</li>
                        <li data-filter=".ongoing">Ongoing</li>
                        <li data-filter=".upcoming">Upcoming</li>
                    </ul>
                </div>
            </div>
            <div class="row mission-container">
                <div class="col-lg-4 col-md-6 col-sm-12 mission-item completed">
                    <div class="mission-wrap">
                        <figure>
                            <img class="img-lm"src="{{ asset('image/mission/campanymission.jpeg') }}"alt="Mission Image">
                            <a href="{{ asset('image/mission/campanymission.jpeg') }}" class="link-preview" data-lightbox="mission"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="mission-title" href="#">Company cleaning</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mission-item ongoing">
                    <div class="mission-wrap">
                        <figure>
                            <img class="img-lm"src="{{ asset('image/mission/warehosefrunishingmission.jpeg') }}"alt="Mission Image">
                            <a href="{{ asset('image/mission/warehosefrunishingmission.jpeg') }}"class="link-preview" data-lightbox="mission"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="mission-title" href="#">Warehouse furnishing</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mission-item upcoming">
                    <div class="mission-wrap">
                        <figure>
                            <img class="img-lm"src="{{ asset('image/mission/fooddonationmission.jpeg') }}"alt="Mission Image">
                            <a href="{{ asset('image/mission/fooddonationmission.jpeg') }}" class="link-preview" data-lightbox="mission"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="mission-title" href="#">Food Donation</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mission-item ongoing">
                    <div class="mission-wrap">
                        <figure>
                            <img class="img-lm"src="{{ asset('image/mission/charitymission.jpeg') }}"alt="Mission Image">
                            <a href="{{ asset('image/mission/charitymission.jpeg') }}" class="link-preview" data-lightbox="mission"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="mission-title" href="#">Charity work</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mission-item upcoming">
                    <div class="mission-wrap">
                        <figure>
                            <img class="img-lm"src="{{ asset('image/mission/fooddonationmission.jpeg') }}"alt="Mission Image">
                            <a href="{{ asset('image/mission/fooddonationmission.jpeg') }}" class="link-preview" data-lightbox="mission"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="mission-title" href="#">Flood assistance</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mission-item completed">
                    <div class="mission-wrap">
                        <figure>
                            <img class="img-lm"src="{{ asset('image/mission/Homemission.jpeg') }}"alt="Mission Image">
                            <a href="{{ asset('image/mission/Homemission.jpeg') }}"  class="link-preview" data-lightbox="mission"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="mission-title" href="#">Home cleaning consolation team recruitment</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mission-item ongoing">
                    <div class="mission-wrap">
                        <figure>
                            <img class="img-lm"src="{{ asset('image/mission/disastermission.jpeg') }}"alt="Mission Image">
                            <a href="{{ asset('image/mission/disastermission.jpeg') }}"class="link-preview" data-lightbox="mission"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="mission-title" href="#">Disaster assistance team</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mission-item upcoming">
                    <div class="mission-wrap">
                        <figure>
                            <img class="img-lm"src="{{ asset('image/mission/competition.jpeg') }}"alt="Mission Image">
                            <a href="{{ asset('image/mission/competition.jpeg') }}" class="link-preview" data-lightbox="mission"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="mission-title" href="#">Cleaning competition organized</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mission-item completed">
                    <div class="mission-wrap">
                        <figure>
                            <img class="img-lm"src="{{ asset('image/mission/teammission.jpeg') }}"alt="Mission Image">
                            <a href="{{ asset('image/mission/teammission.jpeg') }}" class="link-preview" data-lightbox="mission"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="mission-title" href="#">Team building</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mission-item upcoming">
                    <div class="mission-wrap">
                        <figure>
                            <img class="img-lm"src="{{ asset('image/mission/marketing.jpeg') }}"alt="Mission Image">
                            <a href="{{ asset('image/mission/marketing.jpeg') }}" class="link-preview" data-lightbox="mission"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="mission-title" href="#">Project Marketing</a>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 load-more">
                    <a class="btn" href="">More to organized soon</a>
                </div>
            </div>
        </div>
    </div>
@include('footer')
</body>
</html>
