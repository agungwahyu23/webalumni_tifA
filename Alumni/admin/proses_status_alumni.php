<?php 
// koneksi database
include '../config/koneksi.php';
 
session_start();
if(isset($_POST['simpan'])){

    // menangkap data yang di kirim dari form

$nama_status = $_POST['nama_status'];

// menginput data ke database
$query = mysqli_query($koneksi,"insert into status_alumni values('','$nama_status')");
//alert jika berhasil
if($query){
    echo "<script>alert('Data berhasil disimpan .');window.location=('media.php?halaman=status_alumni')</script>";
}else{
    echo "<script>alert('Data gagal disimpan .');window.location=('media.php?halaman=status_alumni.php')</script>";
}

//proses edit
}elseif(isset($_POST['ubah'])){
    // menangkap data yang di kirim dari form
    $id_status = $_POST['id_status'];
    $nama_status = $_POST['nama_status'];

    // update data ke database
    $query = mysqli_query($koneksi,"update status_alumni set nama_status='$nama_status' where id_status='$id_status'");
 
    // mengalihkan halaman kembali ke index.php
    if($query){
        echo "<script>alert('Data berhasil diedit .');window.location=('media.php?halaman=status_alumni')</script>";
    }else{
        echo "<script>alert('Data gagal diedit .');window.location=('media.php?halaman=status_alumni_edit')</script>";
    }

    //proses delete
}elseif(isset($_GET['id_status'])){
    $id_status = $_GET['id_status'];
    $query = mysqli_query($koneksi, "delete from status_alumni where id_status='$id_status'");

    if($query){
        echo "<script>alert('Data berhasil dihapus .');window.location=('media.php?halaman=status_alumni')</script>";
    }else{
        echo "<script>alert('Data gagal dihapus .');window.location=('media.php?halaman=status_alumni')</script>";
    }
}
?>