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
                    <!-- To do section tab ends
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small
                                class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal"></small>
                        </div>
                    </div>-->
                    <!-- chat tab ends -->
                </div>
            </div>
            @include('side')
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
                                                aria-selected="true">Overview</a>
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
                                            <div class="col-sm-12">
                                                <div
                                                    class="statistics-details d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <p class="statistics-title">Services Rate</p>
                                                        <h3 class="rate-percentage">60.53%</h3>
                                                        <p class="text-success d-flex"><i
                                                                class="mdi mdi-menu-up"></i><span>+2.5%</span></p>
                                                    </div>
                                                    <div>
                                                        <p class="statistics-title">Promotion</p>
                                                        <h3 class="rate-percentage">1,682</h3>
                                                        <p class="text-success d-flex"><i
                                                                class="mdi mdi-menu-up"></i><span>+1.5%</span></p>
                                                    </div>
                                                    <div>
                                                        <p class="statistics-title">Working Hours</p>
                                                        <h3 class="rate-percentage">54.8</h3>
                                                        <p class="text-success d-flex"><i
                                                                class="mdi mdi-menu-down"></i><span>20.8</span></p>
                                                    </div>
                                                    <div class="d-none d-md-block">
                                                        <p class="statistics-title">Avg. Time on Site</p>
                                                        <h3 class="rate-percentage">2m:35s</h3>
                                                        <p class="text-success d-flex"><i
                                                                class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                                    </div>
                                                    <div class="d-none d-md-block">
                                                        <p class="statistics-title">New Employees Analysis</p>
                                                        <h3 class="rate-percentage">68.8</h3>
                                                        <p class="text-success d-flex"><i
                                                                class="mdi mdi-menu-up"></i><span>62.3</span></p>
                                                    </div>
                                                    <div class="d-none d-md-block">
                                                        <p class="statistics-title">Avg. Time on Site</p>
                                                        <h3 class="rate-percentage">1m:35s</h3>
                                                        <p class="text-success d-flex"><i
                                                                class="mdi mdi-menu-down"></i><span>+1.8%</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 d-flex flex-column">
                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div
                                                            class="d-sm-flex justify-content-between align-items-start">
                                                            <div>
                                                                <h4 class="card-title card-title-dash">Customers Data
                                                                </h4>
                                                                <!---require update should be included-->
                                                                <p class="card-subtitle card-subtitle-dash">New
                                                                    customers</p>
                                                            </div>
                                                            <div>
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
                                                                @foreach ($customer as $show)
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <h6><img class="img-sm rounded-10"
                                                                                    src="{{ asset('image/faces/black-male-user.avif') }}"
                                                                                    alt="image"></h6>
                                                                            </td>
                                                                            <td>
                                                                                <div class="d-flex ">
                                                                                    <div>
                                                                                        <h6>{{ $show['id'] }}</h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{ $show['name'] }}</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{ $show['email'] }}</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{ $show['s_admin'] }}</h6>
                                                                            </td>
                                                                            <td>
                                                                                <h6>{{ $show['created_at'] }}</h6>
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

                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div
                                                            class="d-sm-flex justify-content-between align-items-start">
                                                            <div>
                                                                <!--market over view -->
                                                                <h4 class="card-title card-title-dash">The
                                                                    cleaning market Overview</h4>
                                                                <p class="card-subtitle card-subtitle-dash">
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                                                        type="button" id="dropdownMenuButton2"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false"> This month
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton2">
                                                                        <h6 class="dropdown-header">First week
                                                                        </h6>
                                                                        <a class="dropdown-item"
                                                                            href="#">Print</a>
                                                                        <h6 class="dropdown-header">Second week
                                                                        </h6>
                                                                        <a class="dropdown-item"
                                                                            href="#">Print</a>
                                                                        <h6 class="dropdown-header">third week
                                                                        </h6>
                                                                        <a class="dropdown-item"
                                                                            href="#">Print</a>
                                                                        <div class="dropdown-divider"></div>
                                                                    </div>
                                                                    <button
                                                                        class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                                                        type="button" id="dropdownMenuButton2"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-haspopup="false" aria-expanded="false">
                                                                        Previous month
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton2">
                                                                        <h6 class="dropdown-header">First week
                                                                        </h6>
                                                                        <a class="dropdown-item"
                                                                            href="#">Print</a>
                                                                        <h6 class="dropdown-header">Second week
                                                                        </h6>
                                                                        <a class="dropdown-item"
                                                                            href="#">Print</a>
                                                                        <h6 class="dropdown-header">third week
                                                                        </h6>
                                                                        <a class="dropdown-item"
                                                                            href="#">Print</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <!--<a class="dropdown-item" href="#">Separated link</a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-sm-flex align-items-center mt-1 justify-content-between">
                                                            <div
                                                                class="d-sm-flex align-items-center mt-4 justify-content-between">
                                                                <h2 class="me-2 fw-bold">KES 70,2531.00</h2>
                                                                <h4 class="me-2">KSh</h4>
                                                                <h4 class="text-success">(+3.67%)</h4>
                                                            </div>
                                                            <div class="me-3">
                                                                <div id="marketing-overview-legend"></div>
                                                            </div>
                                                        </div>
                                                        <div class="chartjs-bar-wrapper mt-3">
                                                            <!--graphs analysis of cleaning price overview -->
                                                            <canvas id="marketingOverview"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row flex-grow">
                                            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body card-rounded">
                                                        <h4 class="card-title  card-title-dash">Recent Events
                                                        </h4>
                                                        <div class="list align-items-center border-bottom py-2">
                                                            <div class="wrapper w-100">
                                                                <p class="mb-2 font-weight-medium">
                                                                    Change in Board of members
                                                                </p>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <div class="d-flex align-items-center">
                                                                        <i
                                                                            class="mdi mdi-calendar text-muted me-1"></i>
                                                                        <p class="mb-0 text-small text-muted">
                                                                            FEB 20, 2023</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list align-items-center border-bottom py-2">
                                                            <div class="wrapper w-100">
                                                                <p class="mb-2 font-weight-medium">
                                                                    Online zoom meeting
                                                                </p>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <div class="d-flex align-items-center">
                                                                        <i
                                                                            class="mdi mdi-calendar text-muted me-1"></i>
                                                                        <p class="mb-0 text-small text-muted">
                                                                            feb 18, 2023</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list align-items-center border-bottom py-2">
                                                            <div class="wrapper w-100">
                                                                <p class="mb-2 font-weight-medium">
                                                                    Quarterly Report
                                                                </p>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <div class="d-flex align-items-center">
                                                                        <i
                                                                            class="mdi mdi-calendar text-muted me-1"></i>
                                                                        <p class="mb-0 text-small text-muted">
                                                                            Feb 10, 2023</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list align-items-center border-bottom py-2">
                                                            <div class="wrapper w-100">
                                                                <p class="mb-2 font-weight-medium">
                                                                    Financial analysis
                                                                </p>
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <div class="d-flex align-items-center">
                                                                        <i
                                                                            class="mdi mdi-calendar text-muted me-1"></i>
                                                                        <p class="mb-0 text-small text-muted">
                                                                            jan 31, 2023</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="list align-items-center pt-3">
                                                            <div class="wrapper w-100">
                                                                <p class="mb-0">
                                                                    <!--will be having an external page to view all  the Recent events-->
                                                                    <a href="#"
                                                                        class="fw-bold text-primary">Show all
                                                                        <i class="mdi mdi-arrow-right ms-2"></i></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-3">
                                                            <h4 class="card-title card-title-dash">Activities
                                                            </h4>
                                                            <p class="mb-0">23 finished, 12 remaining</p>
                                                        </div>
                                                        <ul class="bullet-line-list">
                                                            <li>
                                                                <div class="d-flex justify-content-between">
                                                                    <div><span class="text-light-green">Ben
                                                                            mwanu</span> Glass cleaning</div>
                                                                    <p>Just now</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex justify-content-between">
                                                                    <div><span class="text-light-green">Oliver
                                                                            Tambo </span> Floor cleaning </div>
                                                                    <p>2h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex justify-content-between">
                                                                    <div><span class="text-light-green">Jack
                                                                            Anyango </span> Floor scrubbing
                                                                    </div>
                                                                    <p>3h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex justify-content-between">
                                                                    <div><span class="text-light-green">Lilian
                                                                            Atieno</span> Head of Staff </div>
                                                                    <p>1h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex justify-content-between">
                                                                    <div><span class="text-light-green">Evana
                                                                            Njuguna </span> Financial analysisyt
                                                                    </div>
                                                                    <p>5h</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex justify-content-between">
                                                                    <div><span class="text-light-green">Monalisa
                                                                            Njeri </span> Glass cleaning
                                                                        department</div>
                                                                    <p>4h</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="list align-items-center pt-3">
                                                            <div class="wrapper w-100">
                                                                <p class="mb-0">
                                                                    <a href="#"
                                                                        class="fw-bold text-primary">Show all
                                                                        <i class="mdi mdi-arrow-right ms-2"></i></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 d-flex flex-column">
                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <h4 class="card-title card-title-dash">Todo
                                                                        list</h4>
                                                                    <div class="add-items d-flex mb-0">
                                                                        <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                                                       <!-- <button
                                                                            class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i
                                                                                class="mdi mdi-plus"></i></button>-->
                                                                    </div>
                                                                </div>
                                                                <div class="list-wrapper">
                                                                    <ul class="todo-list todo-list-rounded">
                                                                        <li class="d-block">
                                                                            <div class="form-check w-100">
                                                                                <label class="form-check-label">
                                                                                    <input class="checkbox"
                                                                                        type="checkbox">AG
                                                                                    meeting<i
                                                                                        class="input-helper rounded"></i>
                                                                                </label>
                                                                                <div class="d-flex mt-2">
                                                                                    <div class="ps-4 text-small me-3">
                                                                                        24 sept 2023</div>
                                                                                    <div
                                                                                        class="badge badge-opacity-warning me-3">
                                                                                        In a Few months </div>
                                                                                    <i
                                                                                        class="mdi mdi-flag ms-2 flag-color"></i>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="d-block">
                                                                            <div class="form-check w-100">
                                                                                <label class="form-check-label">
                                                                                    <input class="checkbox"
                                                                                        type="checkbox">
                                                                                    Renovation of the office <i
                                                                                        class="input-helper rounded"></i>
                                                                                </label>
                                                                                <div class="d-flex mt-2">
                                                                                    <div class="ps-4 text-small me-3">
                                                                                        20 DEC 2033</div>
                                                                                    <div
                                                                                        class="badge badge-opacity-success me-3">
                                                                                        To be done</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="form-check w-100">
                                                                                <label class="form-check-label">
                                                                                    <input class="checkbox"
                                                                                        type="checkbox">Procurement
                                                                                    of detergent <i
                                                                                        class="input-helper rounded"></i>
                                                                                </label>
                                                                                <div class="d-flex mt-2">
                                                                                    <div class="ps-4 text-small me-3">
                                                                                        24 August 2023</div>
                                                                                    <div
                                                                                        class="badge badge-opacity-success me-3">
                                                                                        In Progress</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="border-bottom-0">
                                                                            <div class="form-check w-100">
                                                                                <label class="form-check-label">
                                                                                    <input class="checkbox"
                                                                                        type="checkbox">
                                                                                    Recruitment of HR <i
                                                                                        class="input-helper rounded"></i>
                                                                                </label>
                                                                                <div class="d-flex mt-2">
                                                                                    <div class="ps-4 text-small me-3">
                                                                                        10 july 2023</div>
                                                                                    <div
                                                                                        class="badge badge-opacity me-3">
                                                                                        To be done in two weeks
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--circle chart-->
                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center mb-3">
                                                                    <h4 class="card-title card-title-dash">
                                                                        total analysis</h4>
                                                                </div>
                                                                <canvas class="my-auto" id="doughnutChart"
                                                                    height="200"></canvas>
                                                                <div id="doughnut-chart-legend"
                                                                    class="mt-5 text-center"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Report Monthly-->
                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center mb-3">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">
                                                                            Mode Report</h4>
                                                                    </div>
                                                                    <div>
                                                                        <div class="dropdown">
                                                                            <button
                                                                                class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                                                                type="button"
                                                                                id="dropdownMenuButton3"
                                                                                data-bs-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false"> Month
                                                                                Wise </button>
                                                                            <div class="dropdown-menu"
                                                                                aria-labelledby="dropdownMenuButton3">
                                                                                <a class="dropdown-item"
                                                                                    href="#">Week
                                                                                    Wise</a>
                                                                                <a class="dropdown-item"
                                                                                    href="#">Year
                                                                                    Wise</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <canvas id="leaveReport"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row flex-grow">
                                            <div class="col-12 grid-margin stretch-card">
                                                <div class="card card-rounded">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center mb-3">
                                                                    <div>
                                                                        <h4 class="card-title card-title-dash">
                                                                            Top Performer</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <div
                                                                        class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                        <div class="d-flex">
                                                                            <img class="img-sm rounded-10"
                                                                                src="{{ asset('image/staffs/mercy wamboi.jpeg') }}"
                                                                                alt="image">
                                                                            <div class="wrapper ms-3">
                                                                                <p class="ms-1 mb-1 fw-bold">
                                                                                    Mercy wamboi</p>
                                                                                <small
                                                                                    class="text-muted mb-0">Mombasa</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-muted text-small">
                                                                            3h ago
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                        <div class="d-flex">
                                                                            <img class="img-sm rounded-10"
                                                                                src="{{ asset('image/staffs/nelly wanjiku.jpeg') }}"
                                                                                alt="image">
                                                                            <div class="wrapper ms-3">
                                                                                <p class="ms-1 mb-1 fw-bold">
                                                                                    Nelly wanjiku</p>
                                                                                <small
                                                                                    class="text-muted mb-0">Kirinyaga
                                                                                </small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-muted text-small">
                                                                            1h ago
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                        <div class="d-flex">
                                                                        <img class="img-sm rounded-10"
                                                                                src="{{ asset('image/staffs/brenda wamboi.jpeg') }}"
                                                                                alt="image">
                                                                            <div class="wrapper ms-3">
                                                                                <p class="ms-1 mb-1 fw-bold">
                                                                                    Brenda Wambui</p>
                                                                                <small
                                                                                    class="text-muted mb-0">Nyeri</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-muted text-small">
                                                                            1h ago
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                        <div class="d-flex">
                                                                            <img class="img-sm rounded-10"
                                                                                src="{{ asset('image/staffs/voster.jpeg') }}"
                                                                                alt="image">
                                                                            <div class="wrapper ms-3">
                                                                                <p class="ms-1 mb-1 fw-bold">
                                                                                    Voster otieno</p>
                                                                                <small
                                                                                    class="text-muted mb-0">kisumu</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-muted text-small">
                                                                            1h ago
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="wrapper d-flex align-items-center justify-content-between pt-2">
                                                                        <div class="d-flex">
                                                                            <img class="img-sm rounded-10"
                                                                                src="{{ asset('image/staffs/peter.jpeg') }}"
                                                                                alt="image">
                                                                            <div class="wrapper ms-3">
                                                                                <p class="ms-1 mb-1 fw-bold">
                                                                                    peter otieno</p>
                                                                                <small class="text-muted mb-0">muroni
                                                                                </small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-muted text-small">
                                                                            1h ago
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
