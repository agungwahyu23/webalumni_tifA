<?php 
// koneksi database
include '../js/koneksi.php';
 
// menangkap data yang di kirim dari form
$ID_USER = $_POST['ID_USER'];
$ID_DISKUSI = $_POST['ID_DISKUSI'];
$KOMENTAR = $_POST['KOMENTAR'];
$TGL_KOMENTAR = date("y-m-d ");
 
// tambah data ke database
mysqli_query($koneksi,"insert into komentar_diskusi values('', '$ID_USER','$ID_DISKUSI' '$KOMENTAR', '$TGL_KOMENTAR' )");
 
// mengalihkan halaman kembali ke index.php
header('location:Tampilan_Edit_Komentar.php');
 
?>