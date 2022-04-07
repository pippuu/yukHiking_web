<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agents</title>

    <!-- Custom fonts for this template-->

    <!-- <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css"> -->
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <!-- <link href="{{ public_path('css'),  }}css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link href="css/sb-admin-2.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href={{ url('/dashboard') }}>
                <div>
                    <img src="images/logo.png" height="80px" width="80px">
                </div>
                <div>Pengaturan <i>yukHiking!</i></div>
            </a>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href={{ url('/dashboard') }}>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Users -->
            <li class="nav-item active">
                <a class="nav-link" href={{ url('/users') }}>
                    <span>Users</span></a>
            </li>

            <!-- Nav Item - Agents -->
            <li class="nav-item active">
                <a class="nav-link" href={{ url('/agents') }}>
                    <span>Agents</span></a>
            </li>

            <!-- Nav Item - Couriers -->
            <li class="nav-item active">
                <a class="nav-link" href={{ url('/couriers') }}>
                    <span>Couriers</span></a>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto align-items-center">

                        <!-- Nav Item - Log Info -->
                        <li class="nav-item">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logged in as Admin</span>
                        </li>

                        <!-- Nav Item - Log Out Button -->
                        <li class="nav-item">
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Log Out</a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Agents</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div>
                            <table class="table table-bordered" style="margin-top: 20px">
                                <thead>
                                    <tr>
                                        <th class="col-sm-1">No.</th>
                                        <th class="col-sm-2">Username</th>
                                        <!-- <th>Password (Encrypted)</th> -->
                                        <th>Alamat</th>
                                        <th class="col-sm-2">Edit</th>
                                        <th class="col-sm-2">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Perusahaan</th>
                                        <th>Kontak</th>
                                        <th>Negara</th>
                                    </tr>
                                    <tr>
                                        <td>Medina.ltd</td>
                                        <td>Maria</td>
                                        <td>Jerman</td>
                                    </tr>
                                    <tr>
                                        <td>CT Crop</td>
                                        <td>Chairul Tanjung</td>
                                        <td>Indonesia</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Bootstrap core JavaScript-->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="js/sb-admin-2.min.js"></script>

                    <!-- Page level plugins -->
                    <script src="vendor/chart.js/Chart.min.js"></script>

                    <!-- Page level custom scripts -->
                    <script src="js/demo/chart-area-demo.js"></script>
                    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>