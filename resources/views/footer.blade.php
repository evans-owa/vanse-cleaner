<div class="footer">

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="footer-contact">
                    <h2>Get In Touch</h2>
                    <p><i class="fa fa-map-marker-alt"></i>Garissa road, thika, KIAMBU</p>
                    <p><i class="fa fa-phone-alt"></i>+254757375511</p>
                    <p><i class="fa fa-envelope"></i>vanasejizzy20@gmail.com</p>
                    <div class="footer-social">
                        <a href="https://twitter.com/_evans_owa"><i class="fab fa-twitter"></i></a>
                        <a href="https://web.facebook.com/vayji.evans/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/@vansejizzy4401/channels"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/vanse_evans/"><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-link">
                    <h2>view our side</h2>
                    <a href="{{ url('about') }}">About Us</a>
                    <a href="{{ url('about') }}">Our Story</a>
                    <a href="{{ url('services') }}">Our Services</a>
                    <a href="{{ url('project') }}">Our missions</a>
                    <a href="{{ url('contacts') }}">Contact Us</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-link">
                    <h2>Useful Link</h2>
                    <a href="">Our Clients</a>
                    <a href="">Clients Review</a>
                    <a href="">Ongoing Project</a>
                    <a href="">Customer Support</a>
                    <a href="">FAQs</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-form">
                    <h2>Stay Updated</h2>
                    <p>
                        be on alert for do give offers specifically during holidays
                    </p>
                    <input class="form-control" placeholder="Email here">
                    <button class="btn">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-menu">
        <div class="f-menu">
            <a href="#">Terms of use</a>
            <a href="#">Privacy policy</a>
            <a href="{{ url('contacts') }}">Help & FQAs</a>
            <a href="{{ url('contacts') }}">Contact us</a>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href=""> evans </a>, All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <p><a href="https://twitter.com/_evans_owa">evan sowa</a></p>
            </div>
        </div>
    </div>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>


<!-- JavaScript Libraries -->
<script src="{{ asset('front/js/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/custom.js') }}"></script>
<script src="{{ asset('front/js/fontawesome.js') }}"></script>
<script src="{{ asset('front/js/outcheck.js') }}"></script>
<!--script src="{{ asset('resources/js/jquery.validate.min.js') }}"></script-->


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script-->
<!--script src="https://kit.fontawesome.com/eb87156e76.js" crossorigin="anonymous"></script-->

<script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>

@yield('scripts')
<!-- main Javascript -->
<script src="js/main.js"></script>
<!--sweet alerts-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('status'))
    <script>
        swal("huree!", "{{ session('status') }}", "success");
    </script>
@endif
