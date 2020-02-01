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
        <form method="POST" action="proses_berita.php" enctype="multipart/form-data">
        <table>
        <tr>
          <td width="300px">Pilih Kategori</td>
          <td width="500px"><select name="ID_KATEGORIBERITA" class="form-control">
              <option value="">--Pilih Kategori--</option>
              <?php
              $data = mysqli_query($koneksi,"SELECT * FROM kategori_berita");
              while($d = mysqli_fetch_array($data)){ ?>
              <option value="<?php echo $d['ID_KATEGORIBERITA'];?>"> <?php echo $d['NM_KATEGORI'];?> </option>
              <?php } ?>
              </select></td>
        </tr>
        <input type="hidden" name="<?php echo $_SESSION['ID_USER']; ?>">
        <tr>
                <td>JUDUL</td>
                <td><input type="text" name="JUDUL" class="form-control" placeholder="Judul Berita" ></td>
        </tr>
        <tr>
                <td>ISI</td>
                <td><textarea name="ISI" class="form-control" placeholder="Isi Berita" ></textarea></td>
        </tr>
        <tr>
                <td>Pilih Gambar</td>
                <td><input type="file" name="GAMBAR" class="form-control" placeholder="Pilih gambar" ></td>
        </tr>
        <tr>
        <td></td>
                <td><input type="submit" value="Register" class="btn btn-primary btn-block" name="simpan"></td>
        </tr>
        </table>
          
        </form>
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


