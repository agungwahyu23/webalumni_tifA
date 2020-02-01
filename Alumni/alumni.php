<!DOCTYPE html>
<?php include "config/koneksi.php"; ?>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="shortcut icon" href="assets/images/logo.png"/>
    <title>SMK Trunojoyo - Sistem Informasi Sekolah</title>

    <!-- CSS FILES -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/style-guest.css">

    <link rel="stylesheet" href="assets/css/fractionslider.css"/>
    <link rel="stylesheet" href="assets/css/style-fraction.css"/>
     <link rel="stylesheet" href="assets/css/font-awesome.css">

</head>
<body>
<!--Start Header-->
<header id="header">
    <div id="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 top-info">
                    <span><i class="fa fa-phone"></i>Telepon: (123) 456-7890</span>
                    <span><i class="fa fa-envelope"></i>Email: mail@example.com</span>
                </div>
               
            </div>
        </div>
    </div>
    <!-- LOGO bar -->
    <div id="logo-bar">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <!-- Logo / Mobile Menu -->
                <div class="col-md-12">
                    <div id="logo">
                        <img src="assets/../assets/images/LOGO_T.png">
                        <h1>SMK TRUNOJOYO</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container / End -->
    </div>
    <!--LOGO bar / End-->

    <!-- Navigation
================================================== -->
    <div class="navbar navbar-default navbar-static-top container" role="navigation">
        <!--  <div class="container">-->
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
           <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="alumni.php">Alumni</a></li>
                        <li><a href="#">Profil</a></li>
                        <li><a href="about.php">Tentang</a></li>
                        <li><a href="contact.php">Kontak</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right sm">
                         <li>
                            <a href="admin/index.php">Login</a>
                        </li>
                    </ul>
                </div>
        </div><!--/.row -->
        <!--</div>--><!--/.container -->
    </div>
</header>
<!--End Header-->

<!--start wrapper-->
<section class="wrapper">
    <div class="slider-wrapper">
        <div class="slider">
            <div class="fs_loader"></div>
            <div class="slide">
                <img src="assets/images/fraction-slider/sekolah.jpg" width="1920" height="540" data-in="fade" data-out="fade" />
            </div>

            <div class="slide">
                <img src="assets/images/fraction-slider/base.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />
            </div>

            <div class="slide">
                <img src="assets/images/fraction-slider/base_3.jpg"  width="1920" height="auto" data-in="fade" data-out="fade" />
            </div>
        </div>
    </div>
    <!--End Slider-->
    
    <section class="content blog">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="blog_medium">
                        
                        <h3>Form Pencarian Data Alumni</h3>
 
<form action="alumni.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" class="btn btn-default" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
    if ($_GET['cari']=="kosong") {
        echo"<script>alert('Kolom masih kosong!!!');</script>";
    }
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<?php 
// Cek apakah terdapat data page pada URL
$page = (isset($_GET['page']))? $_GET['page'] : 1;
					
$limit = 5; // Jumlah data per halamannya

// Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
$limit_start = ($page - 1) * $limit;

    
    if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
        $data ="SELECT profil.* , status_alumni.nama_status FROM profil
        INNER JOIN status_alumni ON profil.id_status=status_alumni.id_status
        WHERE NM_LENGKAP like '%".$cari."%' limit 10";	
    }else{
        $data= "SELECT profil.* , status_alumni.nama_status, user.ID_USER FROM profil
        INNER JOIN status_alumni ON profil.id_status=status_alumni.id_status INNER JOIN user ON user.ID_USER=profil.ID_USER
        WHERE ID_GRUP=2 LIMIT ".$limit_start.",".$limit;
    }
?>	

<div style="padding: 0 15px;">
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th class="text-center">NO</th>
						<th>NISN</th>
						<th>NAMA LENGKAP</th>
						<th>JENIS KELAMIN</th>
						<th>TAHUN LULUS</th>
						<th>STATUS PEKERJAAN</th>
					</tr>
					<?php
					
					
					
					// Buat query untuk menampilkan data siswa sesuai limit yang ditentukan
					$sql = mysqli_query($koneksi, $data);
					
					$no = $limit_start + 1; // Untuk penomoran tabel
					while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
					?>
						<tr>
							<td class="align-middle text-center"><?php echo $no; ?></td>
							<td class="align-middle"><?php echo $data['NISN']; ?></td>
							<td class="align-middle"><?php echo $data['NM_LENGKAP']; ?></td>
							<td class="align-middle"><?php echo $data['JENKEL']; ?></td>
							<td class="align-middle"><?php echo $data['THN_LULUS']; ?></td>
							<td class="align-middle"><?php echo $data['nama_status']; ?></td>
						</tr>
					<?php
						$no++; // Tambah 1 setiap kali looping
					}
					?>
				</table>
			</div>
			
			<!--
			-- Buat Paginationnya
			-- Dengan bootstrap, kita jadi dimudahkan untuk membuat tombol-tombol pagination dengan design yang bagus tentunya
			-->
			<ul class="pagination">
				<!-- LINK FIRST AND PREV -->
				<?php
				if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
				?>
					<li class="disabled"><a href="#">First</a></li>
					<li class="disabled"><a href="#">&laquo;</a></li>
				<?php
				}else{ // Jika page bukan page ke 1
					$link_prev = ($page > 1)? $page - 1 : 1;
				?>
					<li><a href="alumni.php?page=1">First</a></li>
					<li><a href="alumni.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
				<?php
				}
				?>
				
				<!-- LINK NUMBER -->
				<?php
				// Buat query untuk menghitung semua jumlah data
				$sql2 = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM profil");
				$get_jumlah = mysqli_fetch_array($sql2);
				
				$jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
				$jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
				$start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
				$end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
				
				for($i = $start_number; $i <= $end_number; $i++){
					$link_active = ($page == $i)? ' class="active"' : '';
				?>
					<li<?php echo $link_active; ?>><a href="alumni.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php
				}
				?>
				
				<!-- LINK NEXT AND LAST -->
				<?php
				// Jika page sama dengan jumlah page, maka disable link NEXT nya
				// Artinya page tersebut adalah page terakhir 
				if($page == $jumlah_page){ // Jika page terakhir
				?>
					<li class="disabled"><a href="#">&raquo;</a></li>
					<li class="disabled"><a href="#">Last</a></li>
				<?php
				}else{ // Jika Bukan page terakhir
					$link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
				?>
					<li><a href="alumni.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
					<li><a href="alumni.php?page=<?php echo $jumlah_page; ?>">Last</a></li>
				<?php
				}
				?>
			</ul>
		</div>


                        </div>
                        
                        
                    </div>

                    <!--Sidebar Widget-->
                    <div class="col-xs-12 col-md-4 col-lg-4 col-sm-4">
                        <div class="sidebar">
                            <div class="widget widget_search">
                                <div class="site-search-area">
                                    <form method="get" id="site-searchform" action="#">
                                        <div>
                                            <input class="input-text" name="s" id="s" placeholder="Enter Search keywords..." type="text" />
                                            <input id="searchsubmit" value="Search" type="submit" />
                                        </div>
                                    </form>
                                </div><!-- end site search -->
                            </div>
                           
                            <div class="widget widget_about">
                                <div class="widget_title">
                                    <h4><span>Basic Text Widget</span></h4>
                                    </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>

                            <div class="widget widget_archives">
                                <div class="widget_title">
                                    <h4><span>Archives</span></h4>
                                </div>
                                <ul class="archives_list list_style">
                                    <li><a href="#"> November 2014</a></li>
                                    <li><a href="#"> October 2014</a></li>
                                    <li><a href="#"> September 2014</a></li>
                                    <li><a href="#"> August 2014</a></li>
                                    <li><a href="#"> July 2014</a></li>
                                    <li><a href="#"> June 2014</a></li>
                                    <li><a href="#"> May 2014</a></li>
                                </ul>
                            </div>
                            <div class="widget widget_archives">
                                <div class="widget_title">
                                    <h4><span>Kalendart</span></h4>
                                </div>
                               
                            </div>
                            
                            
                        </div>
                    </div>
                </div><!--/.row-->
            </div> <!--/.container-->
        </section>

</section><!--end wrapper-->

<!--start footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="widget_title">
                    <h4><span>About Us</span></h4>
                </div>
                <div class="widget_content">
                    <p>Donec earum rerum hic tenetur ans sapiente delectus, ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus asperiores.</p>
                    <ul class="contact-details-alt">
                        <li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>: #2021 Lorem Ipsum</p></li>
                        <li><i class="fa fa-user"></i> <p><strong>Phone</strong>:(+91) 9000-12345</p></li>
                        <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#">mail@example.com</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="widget_title">
                    <h4><span>Recent Posts</span></h4>
                </div>
                <div class="widget_content">
                    <ul class="links">
                        <li> <a href="#">Aenean commodo ligula eget dolor<span>November 07, 2014</span></a></li>
                        <li> <a href="#">Temporibus autem quibusdam <span>November 05, 2014</span></a></li>
                        <li> <a href="#">Debitis aut rerum saepe <span>November 03, 2014</span></a></li>
                        <li> <a href="#">Et voluptates repudiandae <span>November 02, 2014</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="widget_title">
                    <h4><span>Twitter</span></h4>

                </div>
                <div class="widget_content">
                    <ul class="tweet_list">
                        <li class="tweet_content item">
                            <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                            <span class="time">29 September 2014</span>
                        </li>
                        <li class="tweet_content item">
                            <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                            <span class="time">29 September 2014</span>
                        </li>
                        <li class="tweet_content item">
                            <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                            <span class="time">29 September 2014</span>
                        </li>
                    </ul>
                </div>
                <div class="widget_content">
                    <div class="tweet_go"></div>
                </div>
            </div>
            
        </div>
    </div>
</footer>
<!--end footer-->

<section class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <p class="copyright"> &copy; Copyright <?php echo date('Y');  ?> Nopen rianto</p>
            </div>

         
        </div>
    </div>
</section>

<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
<script src="assets/js/backtoTop.js"></script>

<script>
    $(window).load(function(){
        $('.slider').fractionSlider({
            'fullWidth': 			true,
            'controls': 			true,
            'responsive': 			true,
            'dimensions': 			"1920,450",
            'timeout' :             5000,
            'increase': 			true,
            'pauseOnHover': 		true,
            'slideEndAnimation': 	false,
            'autoChange':           true
        });
    });
</script>
</body>
</html>