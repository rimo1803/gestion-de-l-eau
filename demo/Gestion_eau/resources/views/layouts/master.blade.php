<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="SoengSouy Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="SoengSouy Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>HR-Innovations</title>
    <!-- DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/font-awesome.min.css') }}">
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/line-awesome.min.css') }}">
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/dataTables.bootstrap4.min.css') }}">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/select2.min.css') }}">
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-datetimepicker.min.css') }}">
    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{ URL::to('ssets/plugins/morris/morris.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">

    {{-- message toastr --}}
    <link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
    <script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>
</head>

<body>
    <style>
        .invalid-feedback {
            font-size: 14px;
        }
    </style>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Loader -->
        <div id="loader-wrapper">
            <div id="loader">
                <div class="loader-ellips">
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                </div>
            </div>
        </div>
        <!-- /Loader -->

        <!-- Header -->
        <div class="header">
            <!-- Logo -->
            <div class="header-left">
                <a href="" class="logo">
                    <img src="{{ asset('dist/img/logo.png') }}" width="40" height="40" alt="">
                </a>
            </div>
            <!-- /Logo -->
            <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <!-- Header Title -->
            <div class="page-title-box">
                <h3>Bienvenu, {{ Session::get('name') }}</h3>
            </div>
            <!-- /Header Title -->
            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
            <!-- Header Menu -->
            <ul class="nav user-menu">
                <!-- Search -->
                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search"> <i class="fa fa-search"></i> </a>
                        <form action="search.html">
                            <input class="form-control" type="text" placeholder="Chercher ici ...">
                            <button class="btn" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </li>
                <!-- /Search -->

                <!-- Flag -->
                <li class="nav-item dropdown has-arrow flag-nav">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        <img src="{{ URL::to('assets/img/flags/us.png') }}" alt="" height="20">
                        <span>English</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ URL::to('assets/img/flags/us.png') }}" alt="" height="16"> English
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ URL::to('assets/img/flags/maroc.png') }}" alt="" height="16"> Arabe
                        </a>
                    </div>
                </li>
                <!-- /Flag -->

                <!-- Notifications -->
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge badge-pill">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>

                        <div class="topnav-dropdown-footer"> <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <!-- /Notifications -->

                <!-- Message Notifications -->
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Messages</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                </li>
                <!-- /Message Notifications -->
                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img src="{{ asset('dist/img/logo.png') }}" alt="">
                            <span class="status online"></span></span>
                        <span>{{ Session::get('name') }}</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="">Profile</a>
                        <a class="dropdown-item" href="">Deconexion</a>
                    </div>
                </li>
            </ul>
            <!-- /Header Menu -->

            <!-- Mobile Menu -->
            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-ellipsis-v"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="">Profile</a>
                    <a class="dropdown-item" href="">Deconnexion</a>
                </div>
            </div>
            <!-- /Mobile Menu -->

        </div>
        <!-- /Header -->
        <!-- Sidebar -->
        @include('sidebar.sidebar')
        <!-- /Sidebar -->
        <!-- Page Wrapper -->
        @yield('content')
        <!-- /Page Wrapper -->
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::to('assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap Core JS -->
    <script src="{{ URL::to('assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ URL::to('assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/chart.js') }}"></script>
    <script src="{{ URL::to('assets/js/Chart.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/line-chart.js') }}"></script>
    <!-- Slimscroll JS -->
    <script src="{{ URL::to('assets/js/jquery.slimscroll.min.js') }}"></script>
    <!-- Select2 JS -->
    <script src="{{ URL::to('assets/js/select2.min.js') }}"></script>
    <!-- Datetimepicker JS -->
    <script src="{{ URL::to('assets/js/moment.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <!-- Datatable JS -->
    <script src="{{ URL::to('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Multiselect JS -->
    <script src="{{ URL::to('assets/js/multiselect.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ URL::to('assets/js/app.js') }}"></script>
    @yield('script')
</body>

</html>
