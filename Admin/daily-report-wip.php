<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="css/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="css/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="css/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button">
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="dashboard.html" class="brand-link">
                <img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item menu-open">
                            <a href="dashboard.html" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">REPORT</li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Report WIP
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="daily-report-wip.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daily</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="weekly-report-wip.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Weekly</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!-- Container-fluid -->
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Daily Report WIP</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                                <li class="breadcrumb-item active">Report WIP</li>
                                <li class="breadcrumb-item active">Daily Report</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.main content -->

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!-- Container-fluid -->
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6 text-right">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modals-import">
                                Import Data
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.main content -->

            <!-- Main content -->
            <section class="content">
                <!-- Container-fluid -->
                <div class="container-fluid">
                    <!-- Row -->
                    <div class="row">
                        <!-- Col -->
                        <div class="col-12">
                            <!-- Card -->
                            <div class="card card-info">
                                <!-- Card-header -->
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-6">
                                        </div>
                                        <div class="col-6 text-right">

                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <!-- Card-body -->
                                <div class="card-body">
                                    <table class="table table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>KP</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->

                <!-- Modal -->
                <div class="modal fade" id="modals-import">
                    <!-- Modal-dialog -->
                    <div class="modal-dialog modal-lg">
                        <!-- Modal-content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="modals-import">Import Data</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="import.php" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputFile">File</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="file" required="required">
                                                    <label class="custom-file-label" for="inputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputFactory">Factory</label>
                                            <select class="form-control" name="factory">
                                                <option value="klego">KLEGO</option>
                                                <option value="sambi">SAMBI</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                                    <input type="submit" class="btn btn-info" name="btn_import" value="Upload">
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <!-- Modal -->
                <div class="modal fade" id="modals-lg">
                    <!-- Modal-dialog -->
                    <div class="modal-dialog modal-lg">
                        <!-- Modal-content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="modals-title"></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="kotaForm" name="kotaForm">
                                    <input type="hidden" class="form-control" name="id_kota" id="id_kota">
                                    <div class="form-group">
                                        <label>Nama Kota</label>
                                        <input type="text" class="form-control" style="background-color:white; color:black;" name="nama_kota" id="nama_kota">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                                <button type="submit" class="btn btn-success" id="saveBtn" value="Create">Tambah Data
                                    Kota</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </section>
            <!-- /.main content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Content Wrapper. Contains page content -->

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="js/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="js/jquery.vmap.min.js"></script>
    <script src="js/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="js/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="js/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="js/dashboard.js"></script>
    <!-- Kit Fontawesome -->
    <script src="https://kit.fontawesome.com/b5819102bb.js" crossorigin="anonymous"></script>
    <!-- DataTables  & Plugins -->
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/dataTables.responsive.min.js"></script>
    <script src="js/responsive.bootstrap4.min.js"></script>
    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/buttons.bootstrap4.min.js"></script>
    <script src="js/jszip.min.js"></script>
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
    <script src="js/buttons.html5.min.js"></script>
    <script src="js/buttons.print.min.js"></script>
    <script src="js/buttons.colVis.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": "excel",
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>