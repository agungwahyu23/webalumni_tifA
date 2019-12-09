<?php 
// koneksi database
include '../js/koneksi.php';
 
session_start();
if(isset($_POST['simpan'])){

    // menangkap data yang di kirim dari form

    $ID_KATEGORIDISK = $_POST['ID_KATEGORIDISK'];
    $ID_USER = $_POST['ID_USER'];
    $TITLE = $_POST['TITLE'];
    $CONTENT = $_POST['CONTENT'];
    $TANGGAL_POST = $_POST['TANGGAL_POST'];
// menginput data ke database
$query = mysqli_query($koneksi,"insert into post_diskusi values('','$ID_KATEGORIDISK','$ID_USER','$TITLE','$CONTENT','$TANGGAL_POST')");
//alert jika berhasil
if($query){
    echo "<script>alert('Data berhasil disimpan .');window.location=('Tampilan_Edit_Fordisk.php')</script>";
}else{
    echo "<script>alert('Data gagal disimpan .');window.location=('EditFordisk.php')</script>";
}

//proses edit
}elseif(isset($_POST['ubah'])){
    // menangkap data yang di kirim dari form
    $ID_DISKUSI = $_POST['ID_DISKUSI'];
    $ID_KATEGORIDISK = $_POST['ID_KATEGORIDISK'];
    $ID_USER = $_POST['ID_USER'];
    $TITLE = $_POST['TITLE'];
    $CONTENT = $_POST['CONTENT'];
    $TANGGAL_POST = date("d-M-y ");
   
    // update data ke database
    $query = mysqli_query($koneksi,"update post_diskusi set ID_KATEGORIDISK='$ID_KATEGORIDISK', ID_USER='$ID_USER', TITLE='$TITLE', CONTENT='$CONTENT', TANGGAL_POST='$TANGGAL_POST' where ID_DISKUSI='$ID_DISKUSI'");
 
    // mengalihkan halaman kembali ke index.php
    if($query){
        echo "<script>alert('Data berhasil diedit .');window.location=('Tampilan_Edit_Fordisk.php')</script>";
    }else{
        echo "<script>alert('Data gagal diedit .');window.location=('EditFordisk.php')</script>";
    }

    //proses delete
}elseif(isset($_GET['ID_DISKUSI'])){
    $ID_DISKUSI = $_GET['ID_DISKUSI'];
    $query = mysqli_query($koneksi, "delete from post_diskusi where ID_DISKUSI='$ID_DISKUSI'");

    if($query){
        echo "<script>alert('Data berhasil dihapus .');window.location=('Tampilan_Edit_Fordisk.php')</script>";
    }else{
        echo "<script>alert('Data gagal dihapus .');window.location=('Tampilan_Edit_Fordisk.php')</script>";
    }
}

?>