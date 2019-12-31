<?php
include "../config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

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

        <!-- Form Register -->
      <div class="container">
      <div class="card card-register mx-auto mt-5">
      <div class="card-header">Tambahkan Diskusi Anda</div>
      <div class="card-body">

        <?php
	      include '../config/koneksi.php';
	      $ID_DISKUSI = $_GET['ID_DISKUSI'];
	      $data = mysqli_query($koneksi,"select * from post_diskusi where ID_DISKUSI='$ID_DISKUSI'");
	      while($du = mysqli_fetch_array($data)){
		    ?>
         <form method="POST" action="proses_fordis.php">
          <div class="form-group">
            <div class="form-label-group">
              <input type="hidden" name="ID_DISKUSI" value="<?php echo $du['ID_DISKUSI']; ?>">
              <select name="ID_KATEGORIDISK" id="inputEmail" class="form-control" placeholder="Email address" required="required">
              <option value="">--Pilih Kategori--</option>
              <?php 
              $queri = mysqli_query($koneksi, "SELECT * FROM kategori_diskusi");
	            $noo = 1;
              while($querynama = mysqli_fetch_array($queri)){
                if($du['ID_KATEGORIDISK']==$querynama['ID_KATEGORIDISK']){
                $select="selected";
                }else{
                $select="";
                }
              echo "<option $select>".$noo++.'.'.$querynama['KATEGORI']."</option>";
              }
              ?>
              </select>
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="TITLE" id="firstName" value="<?php echo $du['TITLE']; ?>" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="firstName">Judul Diskusi</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="CONTENT" id="lastName" value="<?php echo $du['CONTENT']; ?>" class="form-control" placeholder="Last name" required="required">
                  <label for="lastName">Isi</label>
                </div>
              </div>
            </div>
          </div>
          <input type="submit" value="Simpan" class="btn btn-primary btn-block" name="ubah">
        </form>
        <?php } ?>
      </div>
    </div>
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