<?php
// include kan koneksi terlebih dahulu
include"../config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">

    <!-- Sidebar -->

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        
        <!-- Icon Cards-->
        <div class="row">
        <?php
    //multi user admin
    if ($_SESSION['ID_GRUP']=='1') {?>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <?php
                $count=mysqli_query($koneksi,"select count(*) as total_komentar from post_diskusi");
                $jml=mysqli_fetch_array($count);
                ?>
                <div class="mr-5"><?php echo $jml['total_komentar']; ?> Diskusi!</div>
              </div>
              <?php
                $count=mysqli_query($koneksi,"select count(*) as total_user from user where ID_GRUP=2");
                $jml=mysqli_fetch_array($count);
                ?>
              <a class="card-footer text-white clearfix small z-1" href="media.php?halaman=fordis">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?php echo $jml['total_user']; ?> Alumni Terdata!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="media.php?halaman=data_alumni">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <?php
                $count=mysqli_query($koneksi,"select count(*) as total_berita from berita where ID_KATEGORIBERITA=5");
                $jml=mysqli_fetch_array($count);
                ?>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5"><?php echo $jml['total_berita']; ?> Lowongan Kerja!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="media.php?halaman=berita">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <?php
    //multi user admin
    }elseif ($_SESSION['ID_GRUP']=='2') {?>
     <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <?php
                $count=mysqli_query($koneksi,"select count(*) as total_komentar from post_diskusi");
                $jml=mysqli_fetch_array($count);
                ?>
                <div class="mr-5"><?php echo $jml['total_komentar']; ?> Diskusi!</div>
              </div>
              <?php
                $count=mysqli_query($koneksi,"select count(*) as total_user from user where ID_GRUP=2");
                $jml=mysqli_fetch_array($count);
                ?>
              <a class="card-footer text-white clearfix small z-1" href="media.php?halaman=fordis">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?php echo $jml['total_user']; ?> Alumni Terdata!</div>
              </div>
            </div>
          </div>
          <?php
                $count=mysqli_query($koneksi,"select count(*) as total_berita from berita where ID_KATEGORIBERITA=5");
                $jml=mysqli_fetch_array($count);
                ?>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5"><?php echo $jml['total_berita']; ?> Lowongan Kerja!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="media.php?halaman=loker">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <?php } ?>
        </div>

        <!-- Area Chart Example-->
        
        <!-- DataTables Example -->

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
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
