@include('header1')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{ $category->name }}</h2>
            </div>
        </div>
    </div>
</div>


<body>
    <!-- trending servicves-->
    <div class="letter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2>{{ $category->name }}</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="service">
            <div class="container">
                <div class="row">
                    @foreach ($cateService as $serve)
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <!--making the card clicklable--->
                                <a href="{{url('category/'.$category->name.'/'.$serve->service_name)}}">
                                    <img src="{{ asset('assets/uploads/service1/' . $serve->image) }}" alt="image here"
                                        width="200px" height="200px">
                                    <h3>{{ $serve->service_name }}</h3>
                                    <p style="color:black">
                                        {{ $serve->description }}
                                    </p>
                                    <p style="color:black">
                                        <small>KES {{ $serve->Price }}</small>
                                    </p>
                                    <a class="btn" href="{{ url('services') }}">Request for service</a>
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
