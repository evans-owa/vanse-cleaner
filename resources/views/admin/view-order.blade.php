<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Message | Orders</title>
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
    <!-- endinject
    <link rel="shortcut icon" href="images/favicon.ico" />-->
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
                                    <div class="row">
                                        <h4 class="card-title">Orders</h4>
                                        <!--a href="{{ '' }}" class="btn btn-warning float-end"> New Orders </a-->
                                        <a href="">BACK</a>
                                        <p class="card-description">
                                            order specification<code> specific</code>
                                        </p>
                                        <h3>shipping specification </h3>
                                        <hr>
                                        <div class="col-md-6">
                                            <label for="">First name</label>
                                            <div class="border p-2">{{ $adminorder->fname }}</div>
                                            <label for="">last name</label>
                                            <div class="border p-2">{{ $adminorder->lname }}</div>
                                            <label for="">Email </label>
                                            <div class="border p-2">{{ $adminorder->email }}</div>
                                            <label for="">Phone No.</label>
                                            <div class="border p-2">{{ $adminorder->phonenumber }}</div>
                                            <label for="">Conuty</label>
                                            <div class="border p-2">{{ $adminorder->county }}</div>
                                            <label for="">Area</label>
                                            <div class="border p-2">
                                                {{ $adminorder->specificl }},
                                                {{ $adminorder->address2 }},
                                                {{ $adminorder->Ward }},
                                                {{ $adminorder->constituency }},
                                            </div>
                                            <label for="">Land mark </label>
                                            <div class="border p-2">{{ $adminorder->landmark }}</div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">

                                                <label for="">Request status</label>
                                                <form action="{{ url('update-order/' . $adminorder->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <select class="form-select" name="order_status">
                                                        <!--option selected>Change status menu</option-->
                                                        <option {{ $adminorder->status == '0' ? 'selected' : '' }}
                                                            value="0">Pending</option>
                                                        <option {{ $adminorder->status == '1' ? 'selected' : '' }}
                                                            value="1">Completed</option>
                                                    </select>
                                                    <button type="submit" class="btn btn-primary mt-3">update</button>
                                                </form>
                                            </div>
                                        </div>
                                        <hr>
                                        <a href="{{ url('admin/viewOrderservice') }}" type="button"
                                            class="btn btn-primary float-right">services</a>
                                        <div class="col-md-6">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>

                                                        <th>SERVICE NAME</th>
                                                        <th>Grand total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <td>{{ $adminorder->orgname }}</td>
                                                    <td>KES {{ $adminorder->total_price }}</td>
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

    <!-- the confirmation message-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("Good job!", "{{ session('status') }}", "success");
        </script>
    @endif
</body>

</html>
