<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bismillah</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div id="wrapper">
    <div id="kepala_login">
    <header>
        <a href="#" class="navbar-brand"><img src="img/images.png" height="88px" width="77px" alt="LOGO"></a>
        <a href="#" class="navbar-brand navbar-txt"><h3>Alumni<br>SMK TRUNOJOYO</h3></a>
        <div id="menu">
        <ul>
            <!--ini navbar-->
            <nav>
            <strong>
            <li><a href="index.php">Home</a></li>
            <li><a href="data_alumni.php">Alumni</a></li>
            <li><a href="#">Lowongan</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="login.php">Login</a></li>   
            </strong>
        </nav>
        </ul>
        </div>

    </header>
    </div>
    <!--Bagian section-->
    <section>
        <div class="box_login">
            <p class="tulisan_login">Silahkan Login</p>
            <?php 
	            if(isset($_GET['pesan'])){
		            if($_GET['pesan'] == "gagal"){
			        echo "Login gagal! username dan password salah!";
		            }else if($_GET['pesan'] == "logout"){
			        echo "Anda telah berhasil logout";
		            }else if($_GET['pesan'] == "belum_login"){
			        echo "Anda harus login terlebih dahulu";
		            }
	            }
	        ?>
            <form action="">
                <label>username</label>
                <input type="text" name="username" class="form_login" placeholder="Username...">
                <label>Password</label>
                <input type="password" name="pass" class="form_login" placeholder="Password...">
                
                <input type="submit" value="login" class="tombol_login">
                <br><br>
                <center>
                    <a href="" class="link">Kembali</a>
                </center>
            </form>
        </div>
    </section>

    <!--Bagian footer-->
    <footer id="footer">
            <ul>
                    <li><h2>SMK TRUNOJOYO JEMBER</h2></li>
                    <li>Jl. Danau Toba No. 24, Kabupaten</li>
                    <li>Jember , Jawa Timur , 68126</li>
                    <li>Telepon: 0331909809</li>
                    <li>Email: smk_trunojoyo@yahoo.com</li>
                    </ul>
    </footer>
</body>
</html>