<?php 
// koneksi database
include '../js/koneksi.php';
 
// menangkap data yang di kirim dari form
$ID_KATEGORIDISK = $_POST['ID_KATEGORIDISK'];
$ID_USER = $_POST['ID_USER'];
$TITLE = $_POST['TITLE'];
$CONTENT = $_POST['CONTENT'];
$TANGGAL_POST = date("y-m-d ");
 
// tambah data ke database
mysqli_query($koneksi,"insert into post_diskusi values('','$ID_KATEGORIDISK', '$ID_USER', '$TITLE', '$CONTENT', '$TANGGAL_POST' )");
 
// mengalihkan halaman kembali ke index.php
header('location:Tampilan_Edit_Fordisk.php');
 
?>