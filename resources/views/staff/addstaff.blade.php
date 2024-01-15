<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VCleaners</title>
    <!-- plugins:css -->
    <link href="vendors/feather/feather.css" rel="stylesheet">
    <link href="vendors/mdi/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="vendors/ti-icons/css/themify-icons.css" rel="stylesheet">
    <link href="vendors/typicons/typicons.css" rel="stylesheet">
    <link href="vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="vendors/css/vendor.bundle.base.css" rel="stylesheet">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="js/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->

    <link rel="stylesheet" href="{{ asset('/css/vertical-layout-light/styledash.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
    <div class="container-scroller">
        @include('headerdash')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('side')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Addding new staff</h4>
                                    <p class="card-description">
                                        More staff to be added
                                    </p>
                                    <form class="forms-sample" action="insertstaff" method="POST" enctype="multipart/form-data">

                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Staff id</label>
                                            <input type="numebr" class="form-control" id="exampleInputEmail3" name="id"
                                                placeholder="staff id" value="{{old('id')}}">
                                                <span style="color:red">@error('id'){{$message}} @enderror </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Profile photo</label>
                                            <input type="file" class="form-control" name="image" id="exampleInputName1"
                                                placeholder="Profile" value="{{old('image')}}">
                                                <span style="color:red">@error('image'){{$message}} @enderror </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Full Name</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="Fullname"
                                                placeholder="Full name" value="{{old('Fullname')}}">
                                                <span style="color:red">@error('Fullname'){{$message}} @enderror </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail3" name="Email"
                                                placeholder="Email" value="{{old('Email')}}">
                                                <span style="color:red">@error('Email'){{$message}} @enderror </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">service name</label>
                                            <select class="form-control" id="exampleSelectGender" name="service_name"value="{{old('service_name')}}">
                                                <option>Select service</option>
                                                <option>Fincial analysit</option>
                                                <option>Human resource manager</option>
                                                <option>Procuremnt offices</option>
                                                <option>Supervisor</option>
                                                @foreach($Service as $item)
                                                    <option value="{{$item->service_name}}">{{$item->service_name}}</option>
                                                @endforeach
                                            </select>
                                            <span style="color:red">@error('service_name'){{$message}} @enderror </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Gender</label>
                                            <select class="form-control" id="exampleSelectGender" name="gender" value="{{old('gender')}}">
                                                <option>M</option>
                                                <option>F</option>
                                                <option>O</option>
                                            </select>
                                            <span style="color:red">@error('gender'){{$message}} @enderror </span>
                                        </div>
                                        <!--
                                        <div class="form-group">
                                        <label>File upload</label>
                                        <input type="file" name="img[]" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Upload Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                        </div>
                                        -->
                                        <div class="form-group">
                                            <label for="exampleInputCity1">Salary</label>
                                            <input type="number" class="form-control" id="exampleInputCity1"
                                                placeholder="Amount" name="Salary" value="{{old('Salary')}}">
                                                <span style="color:red">@error('Salary'){{$message}} @enderror </span>
                                        </div>

                                        <button type="submit" class="btn btn-primary me-2">Submit</button>

                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- main-panel ends -->
        <div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="vendors/progressbar.js/progressbar.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
