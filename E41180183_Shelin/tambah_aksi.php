<?php 
// koneksi database
include '../web_alumni/config/koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_status = $_POST['nama_status'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into status_alumni values('','$nama_status')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
