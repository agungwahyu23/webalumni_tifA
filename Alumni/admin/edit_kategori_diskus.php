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

        <!-- Breadcrumbs-->
        <!-- Form Register -->
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Edit Kategori Diskusi</div>
      <div class="card-body">
      <form action="proses_kat_diskus.php" method="post">
      <?php
	include '../config/koneksi.php';
	$ID_KATEGORIDISK = $_GET['ID_KATEGORIDISK'];
	$data = mysqli_query($koneksi,"select * from kategori_diskusi where ID_KATEGORIDISK='$ID_KATEGORIDISK'");
	while($d = mysqli_fetch_array($data)){
		?>
			<table>
				<tr>			
					<td>
						<input type="hidden" name="ID_KATEGORIDISK" value="<?php echo $d['ID_KATEGORIDISK']; ?>" class="form-control">
					</td>
				</tr>
				<tr>
					<td>NAMA KATEGORI</td>
          <td>:</td>
					<td>
						<input type="TEXT" name="KATEGORI" value="<?php echo $d['KATEGORI']; ?>" class="form-control">
                    </td>
				</tr>
				<tr>
          <td></td><td></td>
					<td><input type="submit" value="SIMPAN" name="ubah" class="btn btn-primary btn-block"></td>
        </tr>
        <tr>
          <td></td><td></td>
          <td><a href="media.php?halaman=ketegori_diskusi" class="btn btn-danger btn-block">Batal</a></td>
        </tr>
			</table>
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