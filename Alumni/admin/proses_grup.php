<?php 
// koneksi database
include '../config/koneksi.php';
 
session_start();
if(isset($_POST['simpan'])){

    // menangkap data yang di kirim dari form

$NAMA = $_POST['NAMA'];
$DESKRIPSI = $_POST['DESKRIPSI'];

// menginput data ke database
$query = mysqli_query($koneksi,"insert into grup values('','$NAMA','$DESKRIPSI')");
//alert jika berhasil
if($query){
    echo "<script>alert('Data berhasil disimpan .');window.location=('media.php?halaman=grup')</script>";
}else{
    echo "<script>alert('Data gagal disimpan .');window.location=('media.php?halaman=grup_add')</script>";
}

//proses edit
}elseif(isset($_POST['ubah'])){
    // menangkap data yang di kirim dari form
    $ID_GRUP = $_POST['ID_GRUP'];
    $NAMA = $_POST['NAMA'];
    $DESKRIPSI = $_POST['DESKRIPSI'];

    // update data ke database
    $query = mysqli_query($koneksi,"update grup set NAMA='$NAMA', DESKRIPSI='$DESKRIPSI' where ID_GRUP='$ID_GRUP'");
 
    // mengalihkan halaman kembali ke index.php
    if($query){
        echo "<script>alert('Data berhasil diedit .');window.location=('media.php?halaman=grup')</script>";
    }else{
        echo "<script>alert('Data gagal diedit .');window.location=('media.php?halaman=grup_edit')</script>";
    }

    //proses delete
}elseif(isset($_GET['ID_GRUP'])){
    $ID_GRUP = $_GET['ID_GRUP'];
    $query = mysqli_query($koneksi, "delete from grup where ID_GRUP='$ID_GRUP'");

    if($query){
        echo "<script>alert('Data berhasil dihapus .');window.location=('media.php?halaman=grup')</script>";
    }else{
        echo "<script>alert('Data gagal dihapus .');window.location=('media.php?halaman=grup')</script>";
    }
}


 

 
?>