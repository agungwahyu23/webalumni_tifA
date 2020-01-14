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
      <div class="card-header">Register An Account</div>
      <div class="card-body">
      
     
  <form action="proses_data_profil.php" method="post">
			<table>
				<tr>			
					<td>
						<input type="hidden" name="NISN" class="form-control">
            <input type="hidden" name="ID_USER" class="form-control">
					</td>
				</tr>
				<tr>
					<td width="300px">STATUS</td>
					<td width="1000px">
                    <select name="id_status" id="inputEmail" class="form-control" placeholder="Email address" required="required">
              <option value="">--Pilih Status--</option>
              <?php 
              $queri = mysqli_query($koneksi, "SELECT * FROM status_alumni");
	            $noo = 1;
              while($d = mysqli_fetch_array($queri)){?>
                <option value="<?php echo $d['id_status'];?>"> <?php echo $d['nama_status'];?> </option>
              
             <?php } ?>
              
              </select>
                    </td>
				</tr>
				<tr>
					<td>NAMA LENGKAP</td>
					<td>
						<input type="text" name="NM_LENGKAP" class="form-control">
                    </td>
				</tr>
                <tr>
					<td>JENIS KELAMIN</td>
					<td>
						<input type="text" name="JENKEL" class="form-control">
                    </td>
				</tr>
                <tr>
					<td>TEMPAT LAHIR</td>
					<td>
						<input type="text" name="TEMPAT_LAHIR" class="form-control">
                    </td>
				</tr>
                <tr>
					<td>TANGGAL LAHIR</td>
					<td>
						<input type="date" name="TGL_LAHIR" class="form-control">
                    </td>
				</tr>
                <tr>
					<td>ALAMAT</td>
					<td>
						<input type="text" name="ALAMAT" class="form-control">
                    </td>
				</tr>
                <tr>
					<td>TELEPON</td>
					<td>
						<input type="text" name="NO_TELP" class="form-control">
                    </td>
				</tr>
                <tr>
					<td>NAMA AYAH</td>
					<td>
						<input type="text" name="NM_AYAH" class="form-control">
                    </td>
				</tr>
                <tr>
					<td>PEKERJAAN AYAH</td>
					<td>
						<input type="text" name="PEKERJAAN_AYAH" class="form-control">
                    </td>
				</tr>
                <tr>
					<td>NAMA IBU</td>
					<td>
						<input type="text" name="NM_IBU" class="form-control">
                    </td>
				</tr>
                <tr>
					<td>PEKERJAAN IBU</td>
					<td>
						<input type="text" name="PEKERJAAN_IBU" class="form-control">
                    </td>
				</tr>
                <tr>
					<td>TAHUN MASUK</td>
					<td>
						<input type="text" name="THN_MASUK" class="form-control">
                    </td>
				</tr>
                <tr>
					<td>TAHUN LULUS</td>
					<td>
						<input type="text" name="THN_LULUS" class="form-control">
                    </td>
				</tr>
                <tr>
					<td>NOMOR IJAZAH</td>
					<td>
						<input type="text" name="NO_IJAZAH" class="form-control">
                    </td>
				</tr>
                <tr>
					<td>NOMOR SKHUN</td>
					<td>
						<input type="text" name="NO_SKHUN" class="form-control">
                    </td>
				</tr>
				<tr>
          <td></td>
					<td><input type="submit" value="SIMPAN" name="simpan" class="btn btn-primary btn-block">
          <a href="media.php?halaman=home" class="btn btn-warning btn-block">Batal</a></td>
				</tr>
			</table>
		</form>
           		

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


