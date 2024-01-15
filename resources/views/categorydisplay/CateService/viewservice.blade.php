@include('header1');

<body>
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">Available / {{ $service->category }} / {{ $service->service_name }} </h6>
        </div>
    </div>

    <div class="container">
        <div class="card shadow service_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 border-right">
                        <img src="{{ asset('assets/uploads/service1/' . $service->image) }}">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $service->service_name }}
                            {{-- @if ($service->Trending == '1')@endif --}}
                            <label style="font-size: 16px"
                                class="float-end badge bg-danger trending_tag">{{ $service->Trending == '1' ? 'Trending' : '' }}</label>
                        </h2>
                        <hr>
                        <label class="fw-bold"> Price: KES {{ $service->Price }} </label>
                        <P class="mt-3">
                            {{ $service->description }}
                        </P>
                        <hr>
                        @if ($service->Areasize)
                            <label class="badge bg-danger">Areas we dont cover </label>
                        @else
                            <label class="badge bg-success">Area we can we on</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <!--<input type="hidden" value="{{-- $service->id --}}" class="number_id">-->
                                <input type="hidden" value="{{ $service->idservice }}" class="services_id">
                                <input type="hidden" value="{{ $service->id }}" class="originalid">
                                <input type="hidden" value="{{ $service->service_name }}" class="originalname">
                                <label class="badge bg-warning">Specify the county you are located</label>
                                <div class="input-group text-center mb-3">
                                    <input type="text" name="area" value="nairobi"
                                        class="form-control county-input text-center" @required(true) >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-18">
                            <br>
                            <button type="button" class="btn btn-success me-3 addToCartBtn float-start mt-2">Add waiting</button>
                            <button type="button" class="btn btn-success me-3 float-start mt-2"> Request service</button>
                            <a href="{{ url('pricing') }}" type="button" class="btn btn-info float-start mt-2">See the available plan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@include('footer')
