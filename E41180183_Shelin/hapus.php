<?php 
// koneksi database
include '../web_alumni/config/koneksi.php';

// menangkap data id yang di kirim dari url
$id_status = $_GET['id_status'];
$nama_status = $_GET['nama_status'];

// menghapus data dari database
$query = mysqli_query($koneksi, "delete from status_alumni where id_status='$id_status'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>