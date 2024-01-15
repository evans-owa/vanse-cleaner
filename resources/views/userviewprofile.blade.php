@include('header1')

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
                        class="form-control number" id="">
                        <span id="number_error" class="text-danger"></span>

                </div>
                <div class="col-12">
                    <label for="specificLocation" class="form-label">specific location</label>
                    <input type="text" name="specificlocation" value="{{ Auth::user()->specificl }}"
                        class="form-control slocation" id="" placeholder="tom mboya street">
                        <span id="slocation_error" class="text-danger"></span>
                </div>
                <div class="col-12">
                    <label for="alternetaddress" class="form-label ">Alternetaddress</label>
                    <input type="text" name="alternetivceaddress"
                        value="{{ Auth::user()->address2 }}" class="form-control altlocation" id=" "
                        placeholder="Estate/Area and floor">
                        <span id="altlocation_error" class="text-danger"></span>
                </div>
                <div class="col-md-6">
                    <label for="county" class="form-label ">County</label>
                    <input type="text" name="county" class="form-control county"
                        value="{{ Auth::user()->county }}" id="inputcounty">
                        <span id="county_error" class="text-danger"></span>
                </div>
                <div class="col-md-4">
                    <label for="constituency" class="form-label">Constituency</label>
                    <input type="text" name="constituency" value="{{ Auth::user()->constituency }}"
                        class="form-control consti" id="constituency">
                        <span id="consti_error" class="text-danger"></span>
                </div>
                <div class="col-md-4">
                    <label for="ward" class="form-label ">Ward</label>
                    <input type="text" name="ward" value="{{ Auth::user()->Ward }}"
                        class="form-control ward" id="ward">
                        <span id="ward_error" class="text-danger"></span>
                </div>
                <div class="col-md-4">
                    <label for="landMark" class="form-label">land mark</label>
                    <input type="text" name="landmark" value="{{ Auth::user()->landmark }}"
                        class="form-control markland" id="landmark">
                        <span id="markland_error" class="text-danger"></span>
                </div>
            </div>
        </div>

    </div>
</div>
@include('footer')
