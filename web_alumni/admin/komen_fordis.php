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
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Alumni</div>
          <div class="card-body">
            <?php
  include '../config/koneksi.php';
  $ID_DISKUSI = $_GET['ID_DISKUSI'];
  $data = mysqli_query($koneksi,"select * from post_diskusi where ID_DISKUSI='$ID_DISKUSI'");
  while($d = mysqli_fetch_array($data)){
    ?>
    <form method="POST" action="proses_komentar.php">
      <table>
        <tr>      
          <td>
            <input type="hidden" name="ID_DISKUSI" value="<?php echo $d['ID_DISKUSI']; ?>" class="form-control">
          </td>
        </tr>
        <tr>
          <td><b>Judul : </b><?php echo $d['TITLE']; ?></td>
        </tr>
        <tr>
          <td><b>Content : </b></td>
        </tr>
        <tr>
          <td class="breadcrumb breadcrumb-item" width="1010px">
              <a><?php echo $d['CONTENT']; ?></a>
          </td>
        </tr>
        <tr>
          <td><b>Komentar</b></td>
        </tr>
        <tr>
          <td>
          <table>
            <?php
            $komen=mysqli_query($koneksi, "SELECT komentar_diskusi.*, user.* FROM komentar_diskusi JOIN user ON komentar_diskusi.ID_USER=user.ID_USER where ID_DISKUSI=$ID_DISKUSI");
            while ($z=mysqli_fetch_array($komen)) {
            if ($z['ID_USER']==$_SESSION['ID_USER']) {
              
              echo '<tr class="breadcrumb breadcrumb-item">';
              echo '<input type="hidden" name="ID_KOMENTAR" value="'.$z['ID_KOMENTAR'].'">';
              echo '<td><b> Dikomentari oleh:</b> '.$z['NM_LENGKAP'].' <input type="submit" class="fa fa-trash"  value="Hapus" style="font-size:14px;color:red" name="ubah" ></a> </td>';
              echo '<td width="980px"> '.$z['KOMENTAR'].' </td>';
              echo '<td></td>';
              echo '</tr>';
            }else{
              echo '<tr class="breadcrumb breadcrumb-item">';
              echo '<td><b> Dikomentari oleh:</b> '.$z['NM_LENGKAP'].' </td>';
              echo '<td width="980px"> '.$z['KOMENTAR'].' </td>';
              echo '</tr>';
              
            }
          }
            ?>
          </table>
          </td>
        </tr>
      </table>
    </form>

    <!--KOMEN-->
    <form action="proses_komentar.php" method="post">
      <table>
        <tr>
          <td><input type="hidden" name="ID_USER" value="<?php echo $_SESSION['ID_USER'];?>">
          <input type="hidden" name="ID_DISKUSI" value="<?php echo $d['ID_DISKUSI']; ?>" ></td>
        </tr>
        <tr>
          <td width="500px"><textarea name="KOMENTAR" class="form-control" placeholder="Masukkan Komentar"></textarea></td>
        </tr>
        <tr>
          <td><input type="submit" value="Kirim" name="simpan"></td>
        </tr>
      </table>
    </form>

<?php } ?>
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

<!--Delete modal-->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <a class="btn btn-primary" href="proses_komentar.php?ID_KOMENTAR=<?php echo $d['ID_KOMENTAR'];?>">Delete</a>
        </div>
      </div>
    </div>
  </div>

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
