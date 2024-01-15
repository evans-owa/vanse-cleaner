<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Waiting View</title>
</head>
@include('header1');
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0 text-center"> My waiting list</h6>
    </div>
</div>

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('services') }}">Service</a>
            /
            <a href="{{ url('waitingcart') }}">WaitingView</a>
            /
        </h6>
    </div>
</div>

<div class="container">
    <div class="card shadow">
        @if ($waitingItems->count() > 0)
            <div class="card-body">
                @php $total=0; @endphp
                @foreach ($waitingItems as $item)
                    <div class="row service_data">
                        <div class="col-md-2">
                            <img src="{{ asset('assets/uploads/service1/' . $item->service->image) }}" height="150px"
                                width="150px" alt="service image">
                            <hr>
                        </div>
                        <div class="col-md-8">
                            <h3>{{ $item->service->service_name }}</h3>
                            <hr>
                        </div>
                        <div class="col-md-2 my-auto">
                            <h6> KES {{ $item->service->Price }}
                        </div>
                        <div class="row md-3">
                            <div class="col-md-3">
                                <input type="hidden" class="services_id" value="{{ $item->idservice }}">
                                <label class="badge bg-warning">Specify the county you are located</label>

                                <div class="input-group text-center mb-3">
                                    <button class="input-group-text me-3 changeArea float-start">Update</button>
                                    <input type="text" name="area" placeholder="Areas" value="{{ $item->Area }}"
                                        class="form-control county-input text-center">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">

                            <button class="btn btn-outline-danger me-3  delete-cart-item float-start"><i
                                    class="fa fa-trash"></i>Remove</button>
                            <button type="button" class="btn btn-info me-3 float-start">Add a plan instead
                            </button>
                            <a href="{{ url('checkoutWaiting') }}" type="button"
                                class="btn btn-outline-success float-end"> Request service </a>
                        </div>

                    </div>
                    <hr>
                    <hr>
                    @php $total +=  $item->service->Price; @endphp
                @endforeach
                <div class="card-footer">
                    <h6>Total price :KES {{ $total }}</h6>
                    <a href="{{ url('checkoutWaiting') }}" type="button" class="btn btn-outline-success float-end">
                        Request service </a>
                </div>
            @else
                <div class="card-body text-center">
                    <h2> Your <i class="fa fa-clock-o" aria-hidden="true"></i>
                        is very empty </i></h2>
                    <a href="{{ url('services') }}" class="btn btn-outline-primary float-end">Add a service
                    </a>
                </div>
            </div>
        @endif
    </div>
</div>

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
</div>
</div>
@include('footer')
