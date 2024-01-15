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
        @include('headerdash')
        <!--side menu-->
        <div class="container-fluid page-body-wrapper">
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section"
                            role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
                            aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                        aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                        id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary me-2"></i>
                                <span>Feb 11 2023</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting reschedule</p>
                            <p class="text-gray mb-0">The total number of sessions to be done</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary me-2"></i>
                                <span>Feb 7 2023</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with VERMOR limited staffs</p>
                            <p class="text-gray mb-0 ">Call Mwangi Wairimu</p>
                        </div>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            @include('side')
            <!--partial-->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">adding new services </h4>
                                    <p class="card-description">
                                        more categories added
                                    </p>
                                    @if (Session::get('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    @if (Session::get('fail'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('fail') }}
                                        </div>
                                    @endif
                                    <form class="forms-sample" action="{{ url('update-services'.$products->id )}}" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                          <br>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Service id</label>
                                                <input type="number" class="form-control" id="exampleInputName1"
                                                    name="idservice" placeholder="id" value="{{$products->idservice}}">
                                                <span style="color:green">
                                                    @error('idservice')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Service name</label>
                                                <input type="text" class="form-control" id="exampleInputName1"
                                                    name="servicename" placeholder="name of the service"
                                                    value="{{$products->service_name}}">
                                                <span style="color:green">
                                                    @error('servicename')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Description</label>
                                                <input type="text" class="form-control" id="exampleInputName1"
                                                    name="Description" placeholder="Description"
                                                    value="{{$products->description}}">
                                                <span style="color:green">
                                                    @error('Description')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            @if($products->image)
                                            <img src ="{{asset('assets/uploads/service1/'.$products->image )}}" alt="picture" width="700px" height="500px">
                                            @endif
                                            <div class="form-group">
                                                <label for="exampleInputName1">Image</label>
                                                <input type="file" class="form-control" id="exampleInputName1"
                                                    name="image">
                                             <br>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Status</label>
                                                <input type="checkbox" class="form-checkbox" id="exampleInputName1"
                                                    name="Status" placeholder="Status" {{$products->Status == "1" ? 'checked' : '' }}>
                                            </div>

                                            <select class="form-control" name="Category" id="exampleInputName1"
                                                value="{{ old('Category') }}">
                                                <option>{{ $products->category }}</option>
                                                <span style="color:green">
                                                    @error('Category')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </select>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Trending</label>
                                                <input type="checkbox" class="form-checkbox" id="exampleInputName1"
                                                    name="trending" placeholder="Status"
                                                    {{$products->Trending == "1" ? 'checked' : '' }}>
                                                <span style="color:green">
                                                    @error('trending')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">meta_keyword</label>
                                                <input type="text" class="form-control" id="exampleInputName1"
                                                    name="keyword" placeholder="keyword"
                                                    value="{{$products->meta_keywords}}">
                                                <span style="color:green">
                                                    @error('keyword')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Price</label>
                                                <input type="number" class="form-control" id="exampleInputName1"
                                                    name="price" placeholder="price" value="{{$products->Price}}">
                                                <span style="color:green">
                                                    @error('price')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Update</button>

                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("Good job!", "{{ session('status') }}", "success");
        </script>
    @endif


</body>

</html>
