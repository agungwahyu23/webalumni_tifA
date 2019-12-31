<?php 
// koneksi database
include '../config/koneksi.php';
 
session_start();
if(isset($_POST['simpan'])){

    // menangkap data yang di kirim dari form

$NM_KATEGORI = $_POST['NM_KATEGORI'];

// menginput data ke database
$query = mysqli_query($koneksi,"insert into kategori_berita values('','$NM_KATEGORI')");
//alert jika berhasil
if($query){
    echo "<script>alert('Data berhasil disimpan .');window.location=('media.php?halaman=kategori_berita')</script>";
}else{
    echo "<script>alert('Data gagal disimpan .');window.location=('media.php?halaman=kategori_berita')</script>";
}

//proses edit
}elseif(isset($_POST['ubah'])){
    // menangkap data yang di kirim dari form
    $ID_KATEGORIBERITA = $_POST['ID_KATEGORIBERITA'];
    $NM_KATEGORI = $_POST['NM_KATEGORI'];

    // update data ke database
    $query = mysqli_query($koneksi,"update kategori_berita set NM_KATEGORI='$NM_KATEGORI' where ID_KATEGORIBERITA='$ID_KATEGORIBERITA'");
 
    // mengalihkan halaman kembali ke index.php
    if($query){
        echo "<script>alert('Data berhasil diedit .');window.location=('media.php?halaman=kategori_berita')</script>";
    }else{
        echo "<script>alert('Data gagal diedit .');window.location=('media.php?halaman=kategori_berita_edit')</script>";
    }

    //proses delete
}elseif(isset($_GET['ID_KATEGORIBERITA'])){
    $ID_KATEGORIBERITA = $_GET['ID_KATEGORIBERITA'];
    $query = mysqli_query($koneksi, "delete from kategori_berita where ID_KATEGORIBERITA='$ID_KATEGORIBERITA'");

    if($query){
        echo "<script>alert('Data berhasil dihapus .');window.location=('media.php?halaman=kategori_berita')</script>";
    }else{
        echo "<script>alert('Data gagal dihapus .');window.location=('media.php?halaman=kategori_berita')</script>";
    }
}


 

 
?>