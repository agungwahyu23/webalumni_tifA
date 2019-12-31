<?php 
// koneksi database
include '../config/koneksi.php';
 
session_start();
if(isset($_POST['simpan'])){

    // menangkap data yang di kirim dari form
$ID_GRUP = $_POST['ID_GRUP'];
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
$EMAIL = $_POST['EMAIL'];
$NM_LENGKAP = $_POST['NM_LENGKAP'];

// menginput data ke database
$query = mysqli_query($koneksi,"insert into user values('','$ID_GRUP','$USERNAME','$PASSWORD','$EMAIL','$NM_LENGKAP')");
//alert jika berhasil
if($query){
    echo "<script>alert('Data berhasil disimpan .');window.location=('media.php?halaman=user')</script>";
}else{
    echo "<script>alert('Data gagal disimpan .');window.location=('media.php?halaman=user')</script>";
}

//proses edit
}elseif(isset($_POST['ubah'])){
    // menangkap data yang di kirim dari form
    $ID_USER = $_POST['ID_USER'];
    $ID_GRUP = $_POST['ID_GRUP'];
    $USERNAME = $_POST['USERNAME'];
    $PASSWORD = $_POST['PASSWORD'];
    $EMAIL = $_POST['EMAIL'];
    $NM_LENGKAP = $_POST['NM_LENGKAP'];

    // update data ke database
    $query = mysqli_query($koneksi,"UPDATE user SET ID_GRUP='$ID_GRUP', USERNAME='$USERNAME', PASSWORD='$PASSWORD', EMAIL='$EMAIL', NM_LENGKAP='$NM_LENGKAP' where ID_USER='$ID_USER'");
 
    // mengalihkan halaman kembali ke index.php
    if($query){
        echo "<script>alert('Data berhasil diedit .');window.location=('media.php?halaman=user')</script>";
    }else{
        echo "<script>alert('Data gagal diedit .');window.location=('media.php?halaman=user_edit')</script>";
    }

    //proses delete
}elseif(isset($_GET['ID_USER'])){
    $ID_USER = $_GET['ID_USER'];
    $query = mysqli_query($koneksi, "delete from user where ID_USER='$ID_USER'");

    if($query){
        echo "<script>alert('Data berhasil dihapus .');window.location=('media.php?halaman=user')</script>";
    }else{
        echo "<script>alert('Data gagal dihapus .');window.location=('media.php?halaman=user')</script>";
    }
}


 

 
?>