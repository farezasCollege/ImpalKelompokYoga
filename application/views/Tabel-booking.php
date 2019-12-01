<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Booking - Manager</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()pegawai-manager/vendor/fontawesome-free/css/all.min.css; ?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url()pegawai-manager/vendor/datatables/dataTables.bootstrap4.css; ?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()pegawai-manager/css/sb-admin.css; ?>" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar -->
    <ul class="navbar-nav mr-auto mr-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()index.php/REGISTERPEG ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Register Pegawai</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()index.php/DAFTARPEGAWAI ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Pegawai</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()index.php/JASAPEMESANANTABEL ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Booking</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
        <h2 class="ml-2 ml-md-2 mt-md-2">
          Data Booking
        </h2>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Booking</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <!-- Nama, nama_jasa, harga, jam_pelayanan, tanggal_pelayanan -->
                    <th class="text-center" scope="col">NAME</th>
                    <th class="text-center" scope="col">SERVICE</th>
                    <th class="text-center" scope="col">TIME</th>
                    <th class="text-center" scope="col">DATE</th>
                    <th class="text-center" scope="col">STATUS BAYAR</th>
                    <th class="text-center" scope="col">PRICE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><?php foreach ($pemesanan as $Pem) : ?>
                  <td class="text-center"><?= $Pem->Nama; ?></td>
                  <td class="text-center"><?= $Pem->nama_jasa; ?></td>
                  <td class="text-center"><?= $Pem->jam_pelayanan; ?></td>
                  <td class="text-center"><?= $Pem->tanggal_pelayanan; ?></td>
                  <td class="text-center"><?= $Pem->status_bayar; ?>
                </td>
                <td class="text-center"><?= $Pem->harga; ?></td>
                  </tr>
                <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

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

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()pegawai-manager/vendor/jquery/jquery.min.js; ?>"></script>
  <script src="<?php echo base_url()pegawai-manager/vendor/bootstrap/js/bootstrap.bundle.min.js; ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()pegawai-manager/vendor/jquery-easing/jquery.easing.min.js; ?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url()pegawai-manager/vendor/datatables/jquery.dataTables.js; ?>"></script>
  <script src="<?php echo base_url()pegawai-manager/vendor/datatables/dataTables.bootstrap4.js; ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()pegawai-manager/js/sb-admin.min.js; ?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url()pegawai-manager/js/demo/datatables-demo.js; ?>"></script>

</body>

</html>
