<?php 
// koneksi database
include '../config/koneksi.php';
 
session_start();
if(isset($_POST['simpan'])){

    // menangkap data yang di kirim dari form

$KATEGORI = $_POST['KATEGORI'];

// menginput data ke database
$query = mysqli_query($koneksi,"insert into kategori_diskusi values('','$KATEGORI')");
//alert jika berhasil
if($query){
    echo "<script>alert('Data berhasil disimpan .');window.location=('media.php?halaman=ketegori_diskusi')</script>";
}else{
    echo "<script>alert('Data gagal disimpan .');window.location=('media.php?halaman=ketegori_diskusi')</script>";
}

//proses edit
}elseif(isset($_POST['ubah'])){
    // menangkap data yang di kirim dari form
    $ID_KATEGORIDISK = $_POST['ID_KATEGORIDISK'];
    $KATEGORI = $_POST['KATEGORI'];

    // update data ke database
    $query = mysqli_query($koneksi,"update kategori_diskusi set KATEGORI='$KATEGORI' where ID_KATEGORIDISK='$ID_KATEGORIDISK'");
 
    // mengalihkan halaman kembali ke index.php
    if($query){
        echo "<script>alert('Data berhasil diedit .');window.location=('media.php?halaman=ketegori_diskusi')</script>";
    }else{
        echo "<script>alert('Data gagal diedit .');window.location=('media.php?halaman=kategori_diskusi_edit')</script>";
    }

    //proses delete
}elseif(isset($_GET['ID_KATEGORIDISK'])){
    $ID_KATEGORIDISK = $_GET['ID_KATEGORIDISK'];
    $query = mysqli_query($koneksi, "delete from kategori_diskusi where ID_KATEGORIDISK='$ID_KATEGORIDISK'");

    if($query){
        echo "<script>alert('Data berhasil dihapus .');window.location=('media.php?halaman=ketegori_diskusi')</script>";
    }else{
        echo "<script>alert('Data gagal dihapus .');window.location=('media.php?halaman=ketegori_diskusi')</script>";
    }
}
?>