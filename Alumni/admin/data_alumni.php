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

  <title>SB Admin - Tables</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  
  <div id="wrapper">


    

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Profil Alumni</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>NAMA</th>
                    <th>JK</th>
                    <th>TANGGAL LAHIR</th>
                    <th>ALAMAT</th>
                    <th>TAHUN MASUK</th>
                    <th>TAHUN LULUS</th>
                    <th>NO IJAZAH</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
		$no = 1;
		$data = mysqli_query($koneksi,"select * from profil order by ID_USER DESC");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				        <td><?php echo $no++; ?></td>
                <td><?php echo $d['NISN']; ?></td>
				        <td><?php echo $d['NM_LENGKAP']; ?></td>
                <td><?php echo $d['JENKEL']; ?></td>
                <td><?php $tanggal=$d['TGL_LAHIR'];
                echo date("d/m/Y", strtotime($tanggal)); ?></td>
                <td><?php echo $d['ALAMAT']; ?></td>
                <td><?php echo $d['THN_MASUK']; ?></td>
                <td><?php echo $d['THN_LULUS']; ?></td>
                <td><?php echo $d['NO_IJAZAH']; ?></td>
				<td>
					<a class="fa fa-pencil-square-o" style="font-size:24px;color:green" href="media.php?halaman=edit_alumni&NISN=<?php echo $d['NISN'];?>"></a>
					<a class="fa fa-trash" style="font-size:24px;color:red" href="proses_profil.php?NISN=<?php echo $d['NISN']; ?>"></a>
				</td>
			</tr>
			<?php 
		}
		?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

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
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
