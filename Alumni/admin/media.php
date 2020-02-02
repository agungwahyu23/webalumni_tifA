<?php
// include kan koneksi terlebih dahulu
include"../config/koneksi.php";
session_start();
if(empty($_SESSION['USERNAME'])){
	echo"<script>alert('Anda Belum login ...'); window.location=('index.php')</script>";
	}else{
}

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="?halaman=home">SMK TRUNOJOYO</a>

    
    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <?php
    $user=mysqli_query($koneksi,"SELECT user.*, grup.* FROM user JOIN grup ON user.ID_GRUP=grup.ID_GRUP");
    while ($u=mysqli_fetch_array($user)) {
      if ($_SESSION['USERNAME']==$u['USERNAME']) {
        $nm=$_SESSION['NM_LENGKAP'];
        $gr=$u['NAMA'];
      }
    }
    ?>

    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $nm; ?>
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#"><?php echo $nm ?> / <?PHP echo $gr ?></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    
      <ul class="sidebar navbar-nav">
    <?php
    //multi user admin
    if ($_SESSION['ID_GRUP']=='1') {?>
      <li class="nav-item">
        <a class="nav-link" href="media.php?halaman=home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="media.php?halaman=data_alumni">
          <i class="fas fa-fw fa-users"></i>
          <span>Alumni</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="media.php?halaman=user">
          <i class="fas fa-fw fa-user"></i>
          <span>Pengguna</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="media.php?halaman=berita">
          <i class="fas fa-fw fa-book"></i>
          <span>Berita</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="media.php?halaman=grup">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Grup Pengguna</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="media.php?halaman=kategori_berita">
          <i class="fas fa-fw fa-book"></i>
          <span>Data Kategori Berita</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="media.php?halaman=ketegori_diskusi">
          <i class="fas fa-fw fa-comment"></i>
          <span>Data Kategori Diskusi</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="media.php?halaman=status_alumni">
          <i class="fas fa-fw fa-id-badge"></i>
          <span>Data Status Alumni</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="media.php?halaman=fordis">
          <i class="fas fa-fw fa-comments"></i>
          <span>Topik</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="media.php?halaman=report">
          <i class="fas fa-fw fa-book"></i>
          <span>Laporan</span></a>
      </li>

      <?php
    //multi user admin
    }elseif ($_SESSION['ID_GRUP']=='2') {?>
      <li class="nav-item">
        <a class="nav-link" href="media.php?halaman=home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="media.php?halaman=data_profil">
          <i class="fas fa-fw fa-user"></i>
          <span>Profil</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="media.php?halaman=fordis">
          <i class="fas fa-fw fa-comments"></i>
          <span>Topik Diskusi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="media.php?halaman=loker">
          <i class="fas fas fa-briefcase"></i>
          <span>Loker</span>
        </a>
      </li>
    <?php } ?>
    </ul>  
    

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="media.php?halaman=home">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">
          <?php
          if($_GET['halaman']=='home'){
            echo 'Home';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='data_alumni'){
            echo 'Data Alumni';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='edit_alumni'){
            echo 'Data Alumni / Edit Alumni';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='detail_alumni'){
            echo 'Data Alumni / Detail Alumni';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='user'){
            echo 'Data User';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='user_add'){
            echo 'Data User / Tambah User';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='user_edit'){
            echo 'Data User / Edit User';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='berita'){
            echo 'Data Berita';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='berita_add'){
            echo 'Data Berita / Tambah Berita';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='berita_edit'){
            echo 'Data Berita / Edit Berita';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='grup'){
            echo 'Data Grup';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='grup_add'){
            echo 'Data Grup / Tambah Grup';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='grup_edit'){
            echo 'Data Grup / Edit Grup';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='kategori_berita'){
            echo 'Data Kategori Berita';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='kategori_berita_add'){
            echo 'Data Kategori Berita / Tambah Kategori Berita';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='kategori_berita_edit'){
            echo 'Data Kategori Berita / Edit Kategori Berita';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='ketegori_diskusi'){
            echo 'Data Kategori Diskusi';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
          elseif($_GET['halaman']=='kategori_diskusi_add'){
            echo 'Data Kategori Diskusi / Tambah Kategori Diskusi';
            //includkan file home.php jika terdapat URL ?halaman=home
            }
            elseif($_GET['halaman']=='kategori_diskusi_edit'){
              echo 'Data Kategori Diskusi / Edit Kategori Diskusi';
              //includkan file home.php jika terdapat URL ?halaman=home
              }
            elseif($_GET['halaman']=='status_alumni'){
              echo 'Data Status Alumni';
              //includkan file home.php jika terdapat URL ?halaman=home
              }
            elseif($_GET['halaman']=='status_alumni_add'){
              echo 'Data Status Alumni / Tambah Status Alumni';
              //includkan file home.php jika terdapat URL ?halaman=home
              }
            elseif($_GET['halaman']=='status_alumni_edit'){
              echo 'Data Status Alumni / Edit Status Alumni';
              //includkan file home.php jika terdapat URL ?halaman=home
              }
            elseif($_GET['halaman']=='fordis'){
              echo 'Data Fordis';
              //includkan file home.php jika terdapat URL ?halaman=home
              }
            elseif($_GET['halaman']=='fordis_add'){
              echo 'Data Fordis / Tambah Fordis';
              //includkan file home.php jika terdapat URL ?halaman=home
              }
            elseif($_GET['halaman']=='fordis_view'){
              echo 'Data Fordis / Fordis View';
              //includkan file home.php jika terdapat URL ?halaman=home
              }
            elseif($_GET['halaman']=='fordis_edit'){
              echo 'Data Fordis / Edit Fordis';
              //includkan file home.php jika terdapat URL ?halaman=home
              }
            elseif($_GET['halaman']=='data_profil'){
              echo 'Data Profil';
              //includkan file home.php jika terdapat URL ?halaman=home
              }
            elseif($_GET['halaman']=='profil_edit'){
              echo 'Data Profil / Edit Profil';
              //includkan file home.php jika terdapat URL ?halaman=home
              }
            elseif($_GET['halaman']=='report'){
              echo 'Report';
              //includkan file home.php jika terdapat URL ?halaman=home
              }
            elseif($_GET['halaman']=='loker'){
              echo 'Data Loker';
              //includkan file home.php jika terdapat URL ?halaman=home
              }
            elseif($_GET['halaman']=='loker_view'){
              echo 'Data Profil / Loker View';
              //includkan file home.php jika terdapat URL ?halaman=home
              }		
          ?>
          </li>
        </ol>

        <!-- Icon Cards-->
        <?php include"konten.php";?>
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
