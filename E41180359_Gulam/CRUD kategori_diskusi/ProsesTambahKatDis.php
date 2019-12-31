<?php 
// koneksi database
include '../js/koneksi.php';
 
// menangkap data yang di kirim dari form
$KATEGORI = $_POST['KATEGORI'];

 
// tambah data ke database
mysqli_query($koneksi,"insert into kategori_diskusi values('','$KATEGORI' )");
 
// mengalihkan halaman kembali ke index.php
header('location:tampilan_update_katdis.php');
 
?>