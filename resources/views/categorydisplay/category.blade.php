@include('header1')

<body>
    <!-- trending servicves-->
    <div class="container">
        <div class="letter">
            <div class="col-12">
                <h2> trending services</h2>
            </div>
        </div>
    </div>
    <!--glass services
    <div class="service">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2>categories</h2>
                    <p>pick perfect category</p>
                </div>
            </div>
        </div>
    -->
    </div>
    <div class="service">
        <div class="container">
            <div class="row">
                @foreach ($category as $cate)
                    <div class="col-lg-3 col-md-4 mb-3">
                        <a href="{{ url('view-category/'.$cate->name) }}">
                        <div class="card">
                            <div class="card-body" style="animation: backwards">{{$cate->name}}</div>
                                <img src="{{ asset('assets/uploads/category/' . $cate->image) }}" alt="categpry image">
                                <div class="card-body">
                                    <h5> {{ $cate->Name }}</h5>
                                    <span class="float-start">{{ $cate->Areas }} </span>
                                    <p class="float-start" style="color: black">
                                        {{ $cate->description }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</body>
@include('footer')
