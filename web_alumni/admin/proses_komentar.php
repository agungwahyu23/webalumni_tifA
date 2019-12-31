<?php 
// koneksi database
include '../config/koneksi.php';
 
session_start();
if(isset($_POST['simpan'])){

    // menangkap data yang di kirim dari form

$ID_USER = $_POST['ID_USER'];
$ID_DISKUSI = $_POST['ID_DISKUSI'];
$KOMENTAR = $_POST['KOMENTAR'];

// menginput data ke database
$query = mysqli_query($koneksi,"insert into komentar_diskusi values('','$ID_USER','$ID_DISKUSI','$KOMENTAR','')");
//alert jika berhasil
if($query){
    echo "<script>alert('Data berhasil disimpan .');window.location=('media.php?halaman=fordis_view&ID_DISKUSI=$ID_DISKUSI')</script>";
}else{
    echo "<script>alert('Data gagal disimpan .');window.location=('media.php?halaman=fordis_view')</script>";
}

//proses edit
}elseif(isset($_POST['ubah'])){
    // menangkap data yang di kirim dari form
    $ID_KOMENTAR = $_POST['ID_KOMENTAR'];
    $ID_DISKUSI = $_POST['ID_DISKUSI'];
    
    // update data ke database
    $query = mysqli_query($koneksi,"delete from komentar_diskusi where ID_KOMENTAR='$ID_KOMENTAR'");
 
    // mengalihkan halaman kembali ke index.php
    if($query){
        echo "<script>alert('Data berhasil Hapus .');window.location=('media.php?halaman=fordis_view&ID_DISKUSI=$ID_DISKUSI')</script>";
    }else{
        echo "<script>alert('Data gagal Hapus .');window.location=('media.php?halaman=fordis_view&ID_DISKUSI=$ID_DISKUSI')</script>";
    }

    //proses delete
}


 

 
?>