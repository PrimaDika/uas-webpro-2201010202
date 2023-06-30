<?php
include "proces/dbcon.php"; 
// session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] != 'berhasil') {
    // Jika belum login, redirect ke halaman login
    header('Location: login.php');
    exit();
  }
  // Ambil username dari session
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peminjaman</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->

  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="assets/assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Garcia</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Perpustakaan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peminjaman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index-buku.php" class="nav-link">
                  <i class="far fa-circle-fill nav-icon"></i>
                  <p>Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index-mahasiswa.php" class="nav-link">
                  <i class="far fa-circle-fill nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" onclick="LogoutAlert()">Logout</a></li>
              <!-- <li class="breadcrumb-item active">Dashboard</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <?php
            $jumlahData = 0;
            // Nama tabel yang ingin Anda hitung
            $namaTabel = "peminjaman";

            // Query SQL untuk menghitung jumlah data dalam tabel
            $sql = "SELECT COUNT(*) AS total FROM " . $namaTabel;

            // Menjalankan query SQL
            $result = $conn->query($sql);

            // Memeriksa apakah query berhasil dieksekusi
            if ($result) {
            // Mengambil hasil perhitungan jumlah data
            $row = $result->fetch_assoc();
            $jumlahData = $row["total"];
            } 
            ?>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $jumlahData?></h3>

                <p>Jumlah Peminjaman</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <?php
            $jumlahDataBuku = 0;
            // Nama tabel yang ingin Anda hitung
            $namaTabelBuku = "buku";

            // Query SQL untuk menghitung jumlah data dalam tabel
            $sql = "SELECT COUNT(*) AS total FROM " . $namaTabelBuku;

            // Menjalankan query SQL
            $result1 = $conn->query($sql);

            // Memeriksa apakah query berhasil dieksekusi
            if ($result1) {
            // Mengambil hasil perhitungan jumlah data
            $row = $result1->fetch_assoc();
            $jumlahDataBuku = $row["total"];
            } 
            ?>
              <div class="inner">
                <h3><?php echo $jumlahDataBuku?><sup style="font-size: 20px"></sup></h3>

                <p>Jumlah Buku</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="index-buku.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
            <?php
            $jumlahDataBuku = 0;
            // Nama tabel yang ingin Anda hitung
            $namaTabelMahasiswa = "mahasiswa";

            // Query SQL untuk menghitung jumlah data dalam tabel
            $sql = "SELECT COUNT(*) AS total FROM " . $namaTabelMahasiswa;

            // Menjalankan query SQL
            $result2 = $conn->query($sql);

            // Memeriksa apakah query berhasil dieksekusi
            if ($result2) {
            // Mengambil hasil perhitungan jumlah data
            $row = $result2->fetch_assoc();
            $jumlahDataMahasiswa = $row["total"];
            } 
            ?>
              <div class="inner">
                <h3><?php echo $jumlahDataMahasiswa?></h3>

                <p>Jumlah Mahasiswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="index-mahasiswa.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <?php
                $totalDataAllTable = 0;
                $sql = "SHOW TABLES";
                $result = $conn->query($sql);
                
                if ($result) {
                    // Menghitung jumlah data untuk setiap tabel
                    
                    
                    while ($row = $result->fetch_row()) {
                        $tableName = $row[0];
                        $sqlCount = "SELECT COUNT(*) AS total FROM " . $tableName;
                        $resultCount = $conn->query($sqlCount);
                        
                        if ($resultCount) {
                            $rowCount = $resultCount->fetch_assoc();
                            $totalDataAllTable += $rowCount["total"];
                        } 
                    }
                    
                    // Menampilkan jumlah total data di semua tabel
                } 
                ?>
              <div class="inner">
                <h3><?php echo $totalDataAllTable?></h3>

                <p>Jumlah Keseluruhan Data</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

<button id="btnStart" type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">Tambah Pinjaman!</button>
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="formModalLabel">Tambah Peminjaman</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formPeminjaman" method="post" action="proces/proces-create.php" >
        <div class="modal-body">
          <div class="form-group row">
            <label for="firstName" class="col-sm-6 col-form-label">
              Kode Peminjaman
            </label>
            <div class="col-sm-6">
              <input type="text" name="kd_peminjaman" class="form-control" id="firstName" placeholder="PJ-00" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="lastName" class="col-sm-6 col-form-label">
              Tanggal Mulai
            </label>
            <div class="col-sm-6">
              <input type="date" name="tanggal_mulai" class="form-control" id="lastName" placeholder="Doe" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="lastName" class="col-sm-6 col-form-label">
              Tanggal Akhir
            </label>
            <div class="col-sm-6">
              <input type="date" name="tanggal_akhir" class="form-control" id="lastName" placeholder="Doe" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-6 col-form-label">
              Pilih Nama Mahasiswa</label>
            <div class="col-sm-6">
              <select class="form-control" id="awesomeness" name="mahasiswa" required>
                <option selected disabled value="">Pilih Mahasiswa</option>
                <?php
                    $sql = "SELECT * FROM mahasiswa";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?php echo $row['nim'] ?>"><?php echo $row['nama'] ?></option>
                <?php
                    }
                ?>

                 <?php
                    }
                ?>
              </select>
            </div>
          </div>
          
          <div class="form-group row">
            <label for="awesomeness" class="col-sm-6 col-form-label">
              Pilih Nama Buku</label>
            <div class="col-sm-6">
              <select class="form-control" id="awesomeness" name="buku" required>
                <option selected disabled value="">Pilih Buku</option>
                <?php
                    $sql = "SELECT * FROM buku";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?php echo $row['id_buku'] ?>"><?php echo $row['nama_buku'] ?></option>
                <?php
                    }
                ?>

                 <?php
                    }
                ?>
              </select>
            </div>
          </div>
          <div class="form-check">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" onclick="AlertCreate()" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

    <section class="content mt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Buku</th>
                    <th>Nama Mahasiswa</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
             $sql = "SELECT peminjaman.*, buku.nama_buku AS nama_buku, mahasiswa.nama AS nama_mahasiswa
             FROM peminjaman
             INNER JOIN buku ON peminjaman.kd_buku = buku.id_buku
             INNER JOIN mahasiswa ON peminjaman.nim = mahasiswa.nim";
             $result = mysqli_query($conn, $sql);
             if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['nama_buku']?></td>
                    <td><?php echo $row['nama_mahasiswa']; echo("  "); echo $row['nim']; ?></td>
                    <td><?php echo $row['starting_date']?></td>
                    <td><?php echo $row['end_date']?></td>
                    <td>
                    <a href="#" onclick="DeleteAlert('<?php echo $row['kd_peminjaman']; ?>')"><button type="button" class="btn btn-danger">Hapus</button></a>
                    <a href="update-form.php?kd_peminjaman=<?php echo $row['kd_peminjaman']?>"><button id="btnStart" type="button" class="btn btn-warning" data-toggle="modal" data-target="#formModal1">Edit Data!</button></a> 
                    </td>
                   
                </tr>

            <?php
            }
            ?>
             <?php
            } 
            ?>
                 
                  </tbody>
                  <tfoot>
                 
                   
                  </tfoot>
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
    </section>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- Include jQuery UI core module -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!-- Include jQuery UI sortable module -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!-- jQuery -->
<!-- <script src="assets/plugins/jquery/jquery.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<!-- <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>

<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/logout.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- <script>
  // Mendapatkan URL saat ini
  var currentUrl = window.location.href;

  // Mencari tanda '#' dalam URL
  var hashIndex = currentUrl.indexOf('#');

  // Jika tanda '#' ditemukan, menghapus karakter setelahnya
  if (hashIndex !== -1) {
    currentUrl = currentUrl.slice(0, hashIndex);
  }

  // Meneruskan URL yang telah diperbarui
  window.location.href = currentUrl;
</script> -->

<?php 

  // Check if the session status is "berhasil"
  if ($_SESSION['alert'] == 'berhasil') {
    echo "<script>
        Swal.fire({
            title: 'Success!',
            text: 'The operation was successful.',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>";
    // reset $_SESSION['alert']
    $_SESSION['alert'] = 'null';
  }

	?>

</body>
</html>
