<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <title>Couriers</title>

    <!-- Custom fonts for this template-->

    <!-- <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css"> -->
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
            <li class="nav-item">
                <a class="nav-link" href={{ url('/users') }}>
                    <span>Users</span></a>
            </li>

            <!-- Nav Item - Agents -->
            <li class="nav-item">
                <a class="nav-link" href={{ url('/agents') }}>
                    <span>Agents</span></a>
            </li>

            <!-- Nav Item - Couriers -->
            <li class="nav-item active">
                <a class="nav-link" href={{ url('/couriers') }}>
                    <span>Couriers</span></a>
            </li>

            <!-- Nav Item - Items -->
            <li class="nav-item">
                <a class="nav-link" href={{ url('/items') }}>
                    <span>Items</span></a>
            </li>

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
                            <a href="/logout" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Log Out</a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Couriers</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->

                            <!-- Buttons -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Add Courier
                            </button>

                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAllModal">
                                Delete All Courier
                            </button>

                            <!-- Modal Add New Courier -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add New Courier</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/couriers/create" method="post">
                                                @csrf
                                                <div class="d-flex">
                                                    <div style="margin-right:10px">
                                                        <label for="username">Username:</label><br><br>
                                                        <label for="password">Password:</label><br><br>
                                                        <label for="status">Status:</label><br><br>
                                                    </div>
                                                    <div>
                                                        <input type="text" id="username" name="username" placeholder="Budi"><br><br>
                                                        <input type="password" id="password" name="password" placeholder="*****"><br><br>
                                                        <select id="status" name="status">
                                                            <option>Aktif</option>
                                                            <option>Transit</option>
                                                            <option>Nonaktif</option>
                                                        </select>
                                                        <br>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="margin-top: 5%">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" value="Submit">Add Courier</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal deleteAll -->
                            <div class="modal fade" id="deleteAllModal" tabindex="-1" aria-labelledby="deleteAllModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete All Confirmation</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/couriers/destroyAll" method="get">
                                                @csrf
                                                <div class="d-flex">
                                                    <div style="margin-right:10px">
                                                        Are you sure you want to delete all couriers?
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="margin-top: 5%">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                    <button type="submit" class="btn btn-danger" value="Submit">Yes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Courier Table -->
                    <div>
                        <table class="table table-bordered" style="margin-top: 20px">
                            <thead>
                                <tr>
                                    <th class="col-sm-1">Id</th>
                                    <th class="col-sm-2">Username</th>
                                    <!-- <th>Password (Encrypted)</th> -->
                                    <th>Status</th>
                                    <th class="col-sm-2">Edit</th>
                                    <th class="col-sm-2">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($couriers as $courier)
                                <tr>
                                    <td>{{ $courier->ID_courier }}</td>
                                    <td>{{ $courier->username }}</td>
                                    <!-- <td>$user->password</td> -->
                                    <td>{{ $courier->status }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $courier->ID_courier}}">Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $courier->ID_courier}}">Delete</button>
                                    </td>
                                </tr>

                                <!-- Modal Edit Courier -->
                                <div class="modal fade" id="modalEdit{{$courier->ID_courier}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalEdit">Edit Courier</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/couriers/update/{{ $courier->username }}" method="post">
                                                    @csrf
                                                    <div class="d-flex">
                                                        <div style="margin-right:10px">
                                                            <label for="username">Username Baru:</label><br><br>
                                                            <label for="status">Status Baru:</label><br><br>
                                                        </div>
                                                        <div>
                                                            <input type="text" id="username" name="username" placeholder="Budi" value="{{$courier->username}}"><br><br>
                                                            <select id="status" name="status">
                                                                <option>Aktif</option>
                                                                <option>Transit</option>
                                                                <option>Nonaktif</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer" style="margin-top: 5%">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" value="Submit">Update Courier</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Delete Courier -->
                                <div class="modal fade" id="modalDelete{{ $courier->ID_courier}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalDelete">Delete Confirmation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/couriers/destroy/{{ $courier->username }}" method="get">
                                                    @csrf
                                                    <div class="d-flex">
                                                        <div style="margin-right:10px">
                                                            Are you sure you want to delete this courier?<br>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div style="margin-right:10px">
                                                            <br><label for="username">Username:</label><br>
                                                            <label for="status">Status:</label>
                                                        </div>
                                                        <div>
                                                            <br><label>{{ $courier->username }}</label><br>
                                                            <label>{{ $courier->status }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer" style="margin-top: 5%">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        <button type="submit" class="btn btn-danger" value="Submit">Yes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>