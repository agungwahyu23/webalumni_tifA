<?php 
// koneksi database
include '../config/koneksi.php';

// menangkap data yang di kirim dari form
$ID_GRUP = $_POST['ID_GRUP'];
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
$EMAIL = $_POST['EMAIL'];
$name = $_POST['name'];

// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$ID_GRUP','$USERNAME','$PASSWORD','$EMAIL','$name')");

// mengalihkan halaman kembali ke index.php
header("location:../admin/index.php");

?>