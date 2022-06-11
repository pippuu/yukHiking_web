<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <title>Dashboard</title>

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
            <li class="nav-item">
                <a class="nav-link" href={{ url('/couriers') }}>
                    <span>Couriers</span></a>
                <!-- Nav Item - Items -->
            <li class="nav-item active">
                <a class="nav-link" href={{ url('/items') }}>
                    <span>Items</span></a>

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
                        <h1 class="h3 mb-0 text-gray-800">Items</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modalitems">
                                Add Items
                            </button>


                            <!-- <button onclick="location.href='/items/destroyAll'" type="submit" class="btn btn-danger">Delete all Items</button> -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAllModalItems">Delete all Items</button>

                            <!-- Modal -->

                            <div class="modal fade" id="Modalitems" tabindex="-1" aria-labelledby="ModalitemsLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalitemsLabel">Add New Items</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/items/create" method="post">
                                                @csrf
                                                <div class="d-flex">
                                                    <div style="margin-right:10px">
                                                        <label for="ID_Agent">ID_Agent:</label><br><br>
                                                        <label for="Nama_Agent">Nama_Agent:</label><br><br>
                                                        <label for="Nama_Barang">Nama_Barang:</label><br><br>
                                                        <label for="Stock">Stock:</label><br><br>
                                                        <label for="Harga">Harga:</label><br><br>
                                                    </div>
                                                    <div>
                                                        <input type="text" id="ID_Agent" name="ID_Agent" placeholder="T009"><br><br>
                                                        <input type="text" id="Nama_Agent" name="Nama_Agent" placeholder="Budi"><br><br>
                                                        <input type="text" id="Nama_Barang" name="Nama_Barang" placeholder="Tenda"><br><br>
                                                        <input type="text" id="Stock" name="Stock" placeholder="5"><br><br>
                                                        <input type="text" id="Harga" name="Harga" placeholder="100.000"><br><br>
                                                    </div>
                                                </div>
                                                <div class="modal-footer" style="margin-top: 5%">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" value="Submit">Add items</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal -->

                    <!-- User Table -->
                    <div>
                        <table class="table table-bordered" style="margin-top: 20px">
                            <thead>
                                <tr>
                                    <th class="col-sm-1">Id_Item</th>
                                    <th class="col-sm-1">Id_Agent</th>
                                    <th class="col-sm-1">Nama Agent</th>
                                    <th class="col-sm-2">Nama Barang</th>
                                    <th class="col-sm-1">Stock</th>
                                    <th class="col-sm-2">Harga</th>
                                    <th class="col-sm-2">Penyewa</th>
                                    <th class="col-sm-1">Tanggal Sewa</th>
                                    <th class="col-sm-1">Sewa</th>
                                    <th class="col-sm-1">Edit</th>
                                    <th class="col-sm-1">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->ID_Items }}</td>
                                    <td>{{ $item->ID_Agent }}</td>
                                    <td>{{ $item->Nama_Agent }}</td>
                                    <td>{{ $item->Nama_Barang }}</td>
                                    <td>{{ $item->Stock }}</td>
                                    <td>{{ $item->Harga }}</td>
                                    <td>{{ $item->ID_Penyewa }}</td>
                                    <td>{{ $item->tanggal_sewa }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalSewa{{ $item->ID_Agent}}">Sewa</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $item->ID_Agent}}">Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{$item->ID_Items}}">Delete</button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="modalSewa{{$item->ID_Agent}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalSewa">Sewa Item</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                <form action="/test/sewabarang/sewa" method="post">
                                                    @csrf
                                                    <div class="d-flex">
                                                        <div style="margin-right:10px">
                                                            <label for="id_penyewa">ID Penyewa</label><br><br>
                                                            <label for="id_item">ID Item</label><br><br>
                                                            <label for="jumlah_sewa">Jumlah Sewa</label><br><br>
                                                        </div>
                                                        <div>
                                                            <input type="text" id="id_penyewa" name="id_penyewa" placeholder="1"><br><br>
                                                            <input type="text" id="id_item" name="id_item" placeholder="1"><br><br>
                                                            <input type="numbers" id="jumlah_sewa" name="jumlah_sewa" placeholder="10"><br><br>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer" style="margin-top: 5%">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" value="Submit">Update Items</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- //update data pake modal -->
                                <div class="modal fade" id="modalEdit{{$item->ID_Agent}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalEdit">Edit Items</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                <form action="/items/update/{{ $item->ID_Agent }}" method="post">
                                                    @csrf
                                                    <div class="d-flex">
                                                        <div style="margin-right:10px">
                                                            <label for="ID_Agent">ID_Agent Baru:</label><br><br>
                                                            <label for="Nama_Agent">Nama_Agent Baru:</label><br><br>
                                                            <label for="Nama_Barang">Nama_Barang Baru:</label><br><br>
                                                            <label for="Stock">Stock Baru:</label><br><br>
                                                            <label for="Harga">Harga Baru:</label><br><br>
                                                        </div>
                                                        <div>
                                                            <input type="text" id="ID_Agent" name="ID_Agent" placeholder="T009"><br><br>
                                                            <input type="text" id="Nama_Agent" name="Nama_Agent" placeholder="Budi"><br><br>
                                                            <input type="text" id="Nama_Barang" name="Nama_Barang" placeholder="Tenda"><br><br>
                                                            <input type="text" id="Stock" name="Stock" placeholder="5"><br><br>
                                                            <input type="text" id="Harga" name="Harga" placeholder="100.000"><br><br>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer" style="margin-top: 5%">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" value="Submit">Update Items</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- //delete data pake modal -->
                                <div class="modal fade" id="modalDelete{{$item->ID_Items}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/items/destroy/{{ $item->ID_Items }}" method="get">
                                                    <div class="d-flex">
                                                        <div style="margin-right:10px">
                                                            Are you sure you want to delete this Items?<br>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div style="margin-right:10px">
                                                            <br><label for="username">Nama Agent:</label><br>
                                                            <label for="status">Nama Barang:</label>
                                                        </div>
                                                        <div>
                                                            <br><label>{{ $item->Nama_Agent}}</label><br>
                                                            <label>{{ $item->Nama_Barang }}</label>
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



                                <!-- Modal deleteAll -->
                                <div class="modal fade" id="deleteAllModalItems">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete All Confirmation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/items/destroyAll" method="get">
                                                    @csrf
                                                    <div class="d-flex">
                                                        <div style="margin-right:10px">
                                                            Are you sure you want to delete all items?
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









                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.container-fluid -->
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