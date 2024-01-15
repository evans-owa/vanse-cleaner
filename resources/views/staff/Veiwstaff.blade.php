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
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">staff members</h4>
                                    <p class="card-description">
                                        <code>updated staff</code><button class="btn btn-primary me-2 position-absolute top-0 end-0" onClick="history.go(0);">Refresh Page</button>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Image</th>
                                                    <th>Full name</th>
                                                    <th> Email</th>
                                                    <th>Service_name</th>
                                                    <th>gender</th>
                                                    <th>Salary</th>
                                                    <th>hire_date</th>
                                                    <th>Update / delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($staff as $display)
                                                <tr>
                                                    <td>{{$display->staffid}}</td>
                                                    <td >
                                                    <img src="{{'assets/uploads/staffs/'.$display->image}}"  alt="profilepic" width="200" height="200"/>
                                                    </td>
                                                    <td>{{$display->Fullname}}</td>
                                                    <td>{{$display->Email}}</td>
                                                    <td>{{$display->service_name}}</td>
                                                    <td>{{$display->gender}}</td>
                                                    <td>{{$display->Salary}}</td>
                                                    <td>{{$display->hire_date}}</td>
                                                    <td>
                                                        <a href="{{url('edit'.$display->id) }}"class="btn btn-primary">Edit</a>
                                                        <a href="{{ url('deletestaff'.$display->id) }}" class="btn btn-danger">delete </a>
                                                    </td>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
    <!--pop up-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("Good job!", "{{ session('status') }}", "success");
        </script>
    @endif
</body>

</html>
