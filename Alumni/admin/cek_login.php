<?php
include"../config/koneksi.php";
//Buat variable Username dan password untuk menangkap inputan Form 
$USERNAME = mysqli_real_escape_string($koneksi,$_POST['USERNAME']);
$PASSWORD = mysqli_real_escape_string($koneksi,$_POST['PASSWORD']);
//pertama kita buat validasi login
//jika Username dari inputan Empty atau kosong maka
if(empty($USERNAME)){
	//redirect Javascript
	echo"<script>alert('Username Masih kosong ... !!'); window.location=('index.php')</script>";
	}
	//jika Password dari inputan Empty atau kosong maka
	elseif(empty($PASSWORD)){
		//redirect Javascript
		echo"<script>alert('Password Masih kosong ... !!'); window.location=('index.php')</script>";
        }
        //jika Password dan Username tidak kosong maka
		else{
			//buat Query untuk menampilakan data yang di masukan sesuai Username dan Password yang di masukan
            $data = mysqli_query($koneksi, "SELECT * FROM user WHERE USERNAME='$USERNAME' AND PASSWORD='$PASSWORD'");
            $row = mysqli_fetch_array($data);
			//buat variabel cek data 
            $cek_data = mysqli_num_rows($data);
            //sekarang akan buat pengecekan apakah data lebih dari nol atau tidak
				if($cek_data > 0){
					//memulai session
					session_start();
					//buat variable session untuk menyimpan data 
					$_SESSION['ID_USER'] = $row['ID_USER'];
					$_SESSION['USERNAME'] = $row['USERNAME'];
					$_SESSION['PASSWORD'] = $row['PASSWORD'];
					$_SESSION['ID_GRUP'] = $row['ID_GRUP'];
					$_SESSION['NM_LENGKAP'] = $row['NM_LENGKAP'];
                    //buat percabangan untuk melakukan redirect halaman Pengguna / LEVEL USER KARYAWAN
					echo"<script>alert('Anda berhasil Login ... ??'); window.location=('media.php?halaman=home');</script>";
					}else{
						//jika tidak maka
						echo"<script>alert('Login Gagal ... ??'); window.location=('index.php');</script>";
						}
			}
?>