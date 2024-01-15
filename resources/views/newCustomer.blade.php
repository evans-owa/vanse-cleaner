<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VCleaner </title>
    <!-- plugins:css -->
    <link href="vendors/feather/feather.css" rel="stylesheet">
    <link href="vendors/mdi/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="vendors/ti-icons/css/themify-icons.css" rel="stylesheet">
    <!---<link href="vendors/typicons/typicons.css" rel="stylesheet">-->
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
   </head>

<body>
    <div class="container-scroller">
        <!--side menu-->
        <div class="container-fluid page-body-wrapper">
            <!--partial-->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">
                                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab"
                                                href="#" role="tab" aria-controls="overview"
                                                aria-selected="true">Clients and New users</a>
                                        </li>
                                       </ul>
                                    <div>
                                        <div class="btn-wrapper">
                                            <a href="#" class="btn btn-otline-dark"><i class="icon-share"></i>
                                                Share</a>
                                            <a href="#" class="btn btn-otline-dark"><i
                                                    class="icon-printer"></i> Print</a>
                                            <a href="#" class="btn btn-primary text-white me-0"><i
                                                    class="icon-download"></i> Export</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                        aria-labelledby="overview">


                                        <div class="row">
                                            <div class="col-lg-8 d-flex flex-column">

                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-sm-flex justify-content-between align-items-start">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">Customers Data</h4>
                                                                        <!---require update should be included-->
                                                                        <p class="card-subtitle card-subtitle-dash">New customers</p>
                                                                    </div>
                                                                    <div>
                                                                        <button
                                                                            class="btn btn-primary btn-lg text-white mb-0 me-0"
                                                                            type="button">
                                                                            <!--adding a fuction to add new members-->
                                                                            <i class="mdi mdi-account-plus"></i>Add new
                                                                            member
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <!--Table-->
                                                                <div class="table-responsive  mt-1">
                                                                    <table class="table select-table">
                                                                        <thead>
                                                                            <tr>

                                                                                <th>Image</th>
                                                                                <th>User_id</th>
                                                                                <th>Name</th>
                                                                                <th>Email</th>
                                                                                <th>S_Admin</th>
                                                                                <th>Time Registered</th>
                                                                            </tr>
                                                                        </thead>
                                                                     @foreach($customers as $customer)
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <h6><img src="images/faces/face1.jpg"
                                                                                        alt=""></h6>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex ">
                                                                                        <div>
                                                                                            <h6>{{$customer['id']}}</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h6>{{$customer['name']}}</h6>
                                                                                </td>
                                                                                <td>
                                                                                    <h6>{{$customers['email']}}</h6>
                                                                                </td>
                                                                                <td>
                                                                                    <h6>{{$customers['s_admin']}}</h6>
                                                                                </td>
                                                                                <td>
                                                                                    <h6>{{$customers['created_at']}}</h6>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                        @endforeach
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!--partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Evans Owa <a
                                href="vansejizzy20@gmail.com" target="mailto:vansejizzy20@gmail.com">Mail</a> from
                            Vanse </span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All
                            rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
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
