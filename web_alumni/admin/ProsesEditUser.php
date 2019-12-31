 <?php 
// koneksi database
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$ID_USER = $_POST['ID_USER'];
$ID_GRUP = $_POST['ID_GRUP'];
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
$EMAIL = $_POST['EMAIL'];
$name = $_POST['name'];
 
// update data ke database
mysqli_query($koneksi,"update user set USERNAME='$USERNAME', PASSWORD='$PASSWORD', EMAIL='$EMAIL', name='$name' where ID_USER='$ID_USER'");
 
// mengalihkan halaman kembali ke index.php
header("location:../admin/data_user.php");
 
?>