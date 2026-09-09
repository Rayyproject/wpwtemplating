<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- SB Admin 2 -->
    @vite('resources/css/sb-admin-2.min.css')

</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
            id="accordionSidebar">

            <!-- Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
               href="{{ route('admin.dashboard') }}">

                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>

                <div class="sidebar-brand-text mx-3">
                    WPW Admin
                </div>

            </a>

            <hr class="sidebar-divider my-0">

            <!-- Dashboard -->
            <li class="nav-item active">

                <a class="nav-link"
                   href="{{ route('admin.dashboard') }}">

                    <i class="fas fa-fw fa-tachometer-alt"></i>

                    <span>Dashboard</span>

                </a>

            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Management
            </div>

            <!-- Projects -->
            <li class="nav-item">

                <a class="nav-link" href="#">

                    <i class="fas fa-fw fa-folder"></i>

                    <span>Projects</span>

                </a>

            </li>

            <!-- Contact -->
            <li class="nav-item">

                <a class="nav-link"
                   href="{{ route('contact') }}">

                    <i class="fas fa-fw fa-envelope"></i>

                    <span>Contact</span>

                </a>

            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">

                <button class="rounded-circle border-0"
                        id="sidebarToggle">
                </button>

            </div>

        </ul>

        <!-- End Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper"
             class="d-flex flex-column">

            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop"
                            class="btn btn-link d-md-none rounded-circle mr-3">

                        <i class="fa fa-bars"></i>

                    </button>

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">

                            <a class="nav-link"
                               href="{{ route('home') }}">

                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    View Website
                                </span>

                                <i class="fas fa-external-link-alt"></i>

                            </a>

                        </li>

                    </ul>

                </nav>

                <!-- Content -->
                <div class="container-fluid">

                    @yield('content')

                </div>

            </div>


            <!-- Footer -->
            <footer class="sticky-footer bg-white">

                <div class="container my-auto">

                    <div class="copyright text-center my-auto">

                        <span>
                            Copyright &copy; WPW Week 3 2026
                        </span>

                    </div>

                </div>

            </footer>

        </div>

    </div>


    <!-- Scroll to Top -->
    <a class="scroll-to-top rounded"
       href="#page-top">

        <i class="fas fa-angle-up"></i>

    </a>
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- SB Admin 2 -->
@vite('resources/js/sb-admin-2.min.js')

</body>

</body>

</html>