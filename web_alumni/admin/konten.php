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

<body>
<?php
//halaman Statis 
if($_GET['halaman']=='home'){
	include"home.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='data_alumni'){
	include"data_alumni.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='edit_alumni'){
	include"edit_alumni.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='user'){
	include"data_user.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='user_add'){
	include"register.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='user_edit'){
	include"edit_user.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='berita'){
	include"data_berita.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='berita_add'){
	include"tambah_berita.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='berita_edit'){
	include"edit_berita.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='grup'){
	include"data_grup.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='grup_add'){
	include"tambah_grup.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='grup_edit'){
	include"edit_grup.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='kategori_berita'){
	include"data_kategori_berita.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='kategori_berita_add'){
	include"tambah_kategori_berita.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='kategori_berita_edit'){
	include"edit_kategori_berita.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='ketegori_diskusi'){
	include"data_ketegori_diskus.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
elseif($_GET['halaman']=='kategori_diskusi_add'){
	include"tambah_kategori_diskus.php";
	//includkan file home.php jika terdapat URL ?halaman=home
	}
	elseif($_GET['halaman']=='kategori_diskusi_edit'){
		include"edit_kategori_diskus.php";
		//includkan file home.php jika terdapat URL ?halaman=home
		}
	elseif($_GET['halaman']=='status_alumni'){
		include"data_status_alumni.php";
		//includkan file home.php jika terdapat URL ?halaman=home
		}
	elseif($_GET['halaman']=='status_alumni_add'){
		include"tambah_status.php";
		//includkan file home.php jika terdapat URL ?halaman=home
		}
	elseif($_GET['halaman']=='status_alumni_edit'){
		include"edit_status_alumni.php";
		//includkan file home.php jika terdapat URL ?halaman=home
		}
	elseif($_GET['halaman']=='fordis'){
		include"data_fordis.php";
		//includkan file home.php jika terdapat URL ?halaman=home
		}
	elseif($_GET['halaman']=='fordis_add'){
		include"tambah_fordis.php";
		//includkan file home.php jika terdapat URL ?halaman=home
		}
	elseif($_GET['halaman']=='fordis_view'){
		include"komen_fordis.php";
		//includkan file home.php jika terdapat URL ?halaman=home
		}
	elseif($_GET['halaman']=='fordis_edit'){
		include"edit_fordis.php";
		//includkan file home.php jika terdapat URL ?halaman=home
		}
	elseif($_GET['halaman']=='data_profil'){
		include"data_profil.php";
		//includkan file home.php jika terdapat URL ?halaman=home
		}
	elseif($_GET['halaman']=='profil_edit'){
		include"edit_profil.php";
		//includkan file home.php jika terdapat URL ?halaman=home
		}
	elseif($_GET['halaman']=='email'){
		include"email.php";
		//includkan file home.php jika terdapat URL ?halaman=home
		}
	elseif($_GET['halaman']=='report'){
		include"cari-tanggal.php";
		//includkan file home.php jika terdapat URL ?halaman=home
		}
	elseif($_GET['halaman']=='loker'){
		include"data_loker.php";
		//includkan file home.php jika terdapat URL ?halaman=home
		}
	elseif($_GET['halaman']=='loker_view'){
		include"detail_loker.php";
		//includkan file home.php jika terdapat URL ?halaman=home
		}		
else{
	header("location:index.php?halaman=home");
	}
?>	
</body>
</html>
