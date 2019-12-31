<?php 
 
include '../web_alumni/config/koneksi.php';
$id_status = $_POST['id_status'];
$nama_status = $_POST['nama_status'];
 
mysqli_query("UPDATE user SET nama_status='$nama_status' WHERE id_status='$id_status");
 
header("location:index.php?pesan=update");
 
?>