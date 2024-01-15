@include('header1')

<head>

</head>
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
<body>
    <div class="container">
        <form action="{{ url('place-order') }}" method="POST" id="formvalidation" name="formavalidation">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>User Details</h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First name</label>
                                    <input type="" name="firstname" value="{{ Auth::user()->name }}"
                                        class="form-control name">
                                        <span id="firstname_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">last name</label>
                                    <input type="" name="lastname" value="{{ Auth::user()->lname }}"
                                        @required(true) class="form-control lastname" id="">
                                        <span id="lname_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" value="{{ Auth::user()->email }}"
                                        class="form-control email" id="">
                                        <span id="email_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-8">
                                    <label for="phonenumber" class="form-label">phone number</label>
                                    <input type="number" name="phonenumber" value="{{ Auth::user()->phonenumber }}"
                                        class="form-control number" id="" @required(true)>
                                        <span id="number_error" class="text-danger"></span>

                                </div>
                                <div class="col-12">
                                    <label for="specificLocation" class="form-label">specific location</label>
                                    <input type="text" name="specificlocation" value="{{ Auth::user()->specificl }}"
                                        class="form-control slocation"  @required(true) id="" placeholder="tom mboya street">
                                        <span id="slocation_error" class="text-danger"></span>
                                </div>
                                <div class="col-12">
                                    <label for="alternetaddress" class="form-label ">Alternetaddress</label>
                                    <input type="text" name="alternetivceaddress"
                                        value="{{ Auth::user()->address2 }}" class="form-control altlocation" id=" "
                                        placeholder="Estate/Area and floor" @required(true)>
                                        <span id="altlocation_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="county" class="form-label ">County</label>
                                    <input type="text" name="county" class="form-control county"
                                        value="{{ Auth::user()->county }}" id="inputcounty"  @required(true) >
                                        <span id="county_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="constituency" class="form-label">Constituency</label>
                                    <input type="text" name="constituency" value="{{ Auth::user()->constituency }}"
                                        class="form-control consti" id="constituency"  @required(true)>
                                        <span id="consti_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="ward" class="form-label ">Ward</label>
                                    <input type="text" name="ward" value="{{ Auth::user()->Ward }}"
                                        class="form-control ward" id="ward"   @required(true)>
                                        <span id="ward_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="landMark" class="form-label">land mark</label>
                                    <input type="text" name="landmark" value="{{ Auth::user()->landmark }}"
                                        class="form-control markland" id="landmark"  @required(true)>
                                        <span id="markland_error" class="text-danger"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Requested service details</h6>
                            <table class="table table-striped">
                                <thead>
                                    <th>Image</th>
                                    <th>Service name</th>
                                    <th>Area</th>
                                    <th>Price</th>
                                </thead>
                                <tbody>
                                    @php $total=0; @endphp
                                    @foreach ($waitItem as $item)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/uploads/service1/' . $item->service->image) }}"
                                                    height="50px" width="50px" alt="service image">
                                            </td>
                                            <td>{{ $item->service->service_name }}</td>
                                            <td>{{ $item->Area }}</td>
                                            <td>{{ $item->service->Price }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                @php $total +=  $item->service->Price; @endphp
                            </table>
                            <h6 class="px-2"> Grand Total <span class="float-end"> KES {{$total}}</span> </h6>
                            <hr>
                            <h4>Pay after the Services </h4>
                            <button type="submit" class="btn btn-primary float-md-end w-100">Finalize
                                request</button>
                                <div class="divider"> confirmation </div>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="btn btn-success float-md-end w-100 Rezaer_btn"> credential confirmation </button>

                    <!--h4>pay using mpesa</h4>
                    <button type="button" class="btn btn-outline-success">
                        <img src="{{ asset('image/mpesa.png') }}"
                            class="float-md-start w-70" height="40px">
                    </button>
                    <button type="button" class="btn btn-outline-warning">
                        <img src="{{ asset('image/visa.png') }}"
                            class="float-md-start w-70" height="40px">
                    </button-->
                </div>
            </div>
        </form>
    </div>

</body>
@include('footer')
